<?php

use phpbrowscap\Browscap;
use phpbrowscapmk2\Browscap as BrowscapMk2;

require_once 'TWTimer.class.php';

class TestWrapper
{
  const TEST_USER_AGENT = 'thisisacompletelyrandomstringnoreallyitis';
  
  const CLASS_BROWSCAP = 'browscap';
  const CLASS_PHPBROWSCAP = 'phpb';
  const CLASS_PHPBROWSCAP_MARK2 = 'phpb_mk2';
  const CLASS_MOBILE_DETECT_PARTIAL = 'md-short';
  const CLASS_MOBILE_DETECT_FULL = 'md-full';
  const CLASS_UA_PARSER_NEW = 'uaparser-new';
  const CLASS_UA_PARSER_OLD = 'uaparser-old';
  const CLASS_USER_AGENT_INFO = 'uai';
  
  const REAL_TO_FAKE_RATIO = 1;
  
  protected static $available_classes = array(
    self::CLASS_BROWSCAP => 'browscap',
    self::CLASS_PHPBROWSCAP => 'phpbrowscap original',
    self::CLASS_PHPBROWSCAP_MARK2 => 'phpbrowscap mark2',
    self::CLASS_MOBILE_DETECT_PARTIAL => 'Mobile_Detect partial',
    self::CLASS_MOBILE_DETECT_FULL => 'Mobile_Detect full',
    self::CLASS_UA_PARSER_NEW => 'ua-parser new',
    self::CLASS_UA_PARSER_OLD => 'ua-parser old',
    self::CLASS_USER_AGENT_INFO => 'UserAgentInfo'
  );
  
  protected static $browscap_classes = array(
    self::CLASS_BROWSCAP,
    self::CLASS_PHPBROWSCAP,
    self::CLASS_PHPBROWSCAP_MARK2
  );
  
  protected static $browscap_files = array(
    'lite_php_browscap.ini' => ' (lite)',
    'php_browscap.ini' => ' (standard)',
    'full_php_browscap.ini' => ' (full)'
  );
  
  protected $has_opcache;
  
  protected $echo_progress;
  
  protected $ua_examples_file = 'user-agent-examples.txt';
  
  protected $webserver_prefix = 'http://localhost/speed-tests/';
  
  protected $real_uas_count;
  
  public function __construct($echo_progress)
  {
    $this->has_opcache = self::getBoolean(ini_get('opcache.enable_cli'));
    
    $this->echo_progress = self::getBoolean($echo_progress);
    
    TWTimer::$echo_progress = $this->echo_progress;
  }
  
  public function executeAllTests()
  {
    $this->executeOneTest(self::CLASS_BROWSCAP, false, true);
    $this->executeOneTest(self::CLASS_BROWSCAP, true, true);
    
    $this->executeOneTest(self::CLASS_PHPBROWSCAP, false, true);
    $this->executeOneTest(self::CLASS_PHPBROWSCAP, true, true);
    
    $this->executeOneTest(self::CLASS_PHPBROWSCAP_MARK2, false, true);
    $this->executeOneTest(self::CLASS_PHPBROWSCAP_MARK2, true, true);
    
    $this->executeOneTest(self::CLASS_MOBILE_DETECT_PARTIAL, false, true);
    $this->executeOneTest(self::CLASS_MOBILE_DETECT_PARTIAL, true, true);
    
    $this->executeOneTest(self::CLASS_MOBILE_DETECT_FULL, false, true);
    $this->executeOneTest(self::CLASS_MOBILE_DETECT_FULL, true, true);
    
    $this->executeOneTest(self::CLASS_UA_PARSER_OLD, false, true);
    $this->executeOneTest(self::CLASS_UA_PARSER_OLD, true, true);
    
    $this->executeOneTest(self::CLASS_UA_PARSER_NEW, false, true);
    $this->executeOneTest(self::CLASS_UA_PARSER_NEW, true, true);
    
    $this->executeOneTest(self::CLASS_USER_AGENT_INFO, false, true);
    $this->executeOneTest(self::CLASS_USER_AGENT_INFO, true, true);
    
    if ($this->echo_progress)
    {
      TWTimer::printResults();
    }
    else
    {
      return TWTimer::getResults();
    }
  }
  
  public function executeOneTest($class_name, $bulk_check, $no_summary = false)
  {
    if (!isset(self::$available_classes[$class_name]))
    {
      throw new Exception('Class name not one of: ' . implode(', ', array_keys(self::$available_classes)));
    }
    
    $suffix = '';
    
    if (in_array($class_name, self::$browscap_classes))
    {
      @unlink('phpb/cache.php');
      @unlink('phpb/browscap.ini');
      @unlink('phpb_mk2/cache.php');
      @unlink('phpb_mk2/browscap.ini');
      
      $suffix = @self::$browscap_files[basename(ini_get('browscap'))];
    }
    
    $bulk_check = self::getBoolean($bulk_check);
    
    if ($this->echo_progress)
    {
      echo "\n";
    }
    
    if ($bulk_check)
    {
      $this->testBulk($class_name, $suffix);
    }
    else
    {
      $this->testOnePerScript($class_name, $suffix);
    }
    
    if ($no_summary)
    {
      return;
    }
    
    if ($this->echo_progress)
    {
      TWTimer::printResults();
    }
    else
    {
      return TWTimer::getResults();
    }
  }
  
  protected function testOnePerScript($class, $suffix = '')
  {
    $timer_name = self::$available_classes[$class] . $suffix;
    
    if ($pos = strpos($class, '-'))
    {
      $test_uri = explode('-', $class, 2);
      $test_uri = $test_uri[0] . '/test-' . $test_uri[1] . '.php';
    }
    else
    {
      $test_uri = $class . '/test.php';
    }
    
    $test_uri = $this->webserver_prefix . $test_uri;
    
    // test real user agents
    TWTimer::begin($timer_name . ' - real - one per script', $this->has_opcache);
    foreach ($this->getRealUserAgents() as $one_agent)
    {
      $time = $this->ExecuteExternalTest($test_uri, $one_agent);
      TWTimer::add($time);
    }
    TWTimer::end();
    
    // test fake user agents
    TWTimer::begin($timer_name . ' - fake - one per script', $this->has_opcache);
    foreach ($this->getFakeUserAgents() as $one_agent)
    {
      $time = $this->ExecuteExternalTest($test_uri, $one_agent);
      TWTimer::add($time);
    }
    TWTimer::end();
  }
  
  protected function testBulk($class, $suffix = '')
  {
    $cc_class_name = self::nameToCamelCase($class);
    $timer_name = self::$available_classes[$class] . $suffix;
    $method = 'bulkTest' . $cc_class_name;
    
    // initialize and preload
    $result = $this->{'bulkInit' . $cc_class_name}();
    
    // test real user agents
    TWTimer::begin($timer_name . ' - real - bulk', $this->has_opcache);
    foreach ($this->getRealUserAgents() as $one_agent)
    {
      $time = $this->$method($one_agent, $result);
      TWTimer::add($time);
    }
    TWTimer::end();
    
    // test fake user agents
    TWTimer::begin($timer_name . ' - fake - bulk', $this->has_opcache);
    foreach ($this->getFakeUserAgents() as $one_agent)
    {
      $time = $this->$method($one_agent, $result);
      TWTimer::add($time);
    }
    TWTimer::end();
  }
  
  protected function bulkInitPhpb()
  {
    require_once 'phpb/Browscap.php';
    
    $bc = new Browscap('phpb/');
    $bc->localFile = ini_get('browscap');
    $bc->updateMethod = Browscap::UPDATE_LOCAL;
    
    return $bc;
  }
  
  protected function bulkTestPhpb($user_agent, Browscap $bc)
  {
    $time = microtime(true);
    $bc->getBrowser($user_agent);
    return microtime(true) - $time;
  }
  
  protected function bulkInitPhpb_mk2()
  {
    require_once 'phpb_mk2/Browscap.php';
    
    $bc = new BrowscapMk2('phpb_mk2/');
    $bc->localFile = ini_get('browscap');
    $bc->updateMethod = BrowscapMk2::UPDATE_LOCAL;
    
    return $bc;
  }
  
  protected function bulkTestPhpb_mk2($user_agent, BrowscapMk2 $bc)
  {
    $time = microtime(true);
    $x = $bc->getBrowser($user_agent);
    return microtime(true) - $time;
  }
  
  protected function bulkInitUaparserOld()
  {
    require_once 'uaparser/uaparser-old.php';
    
    return new UAParserOld('uaparser/regexes.json');
  }
  
  protected function bulkTestUaparserOld($user_agent, UAParserOld $uap)
  {
    $time = microtime(true);
    $uap->parse($user_agent);
    return microtime(true) - $time;
  }
  
  protected function bulkInitUaparserNew()
  {
    require_once 'uaparser/uaparser-new.php';
    
    return new UAParserNew('uaparser/regexes.php');
  }
  
  protected function bulkTestUaparserNew($user_agent, UAParserNew $uap)
  {
    $time = microtime(true);
    $uap->parse($user_agent);
    return microtime(true) - $time;
  }
  
  protected function bulkInitMdShort()
  {
    require_once 'md/Mobile_Detect.php';
    
    return new Mobile_Detect(array('' => 'x'), self::TEST_USER_AGENT);
  }
  
  protected function bulkInitMdFull()
  {
    require_once 'md/Mobile_Detect.php';
    
    $this->md_browsers = array_keys(Mobile_Detect::getUserAgents());
    $this->md_devices = array_keys(Mobile_Detect::getPhoneDevices() + Mobile_Detect::getTabletDevices());
    $this->md_oses = array_keys(Mobile_Detect::getOperatingSystems());
    
    return new Mobile_Detect(array('' => 'x'), self::TEST_USER_AGENT);
  }
  
  protected function bulkTestMdShort($user_agent, Mobile_Detect $md)
  {
    $time = microtime(true);
    $md->setUserAgent($user_agent);
    $md->isMobile();
    $md->isTablet();
    return microtime(true) - $time;
  }
  
  protected function bulkTestMdFull($user_agent, Mobile_Detect $md)
  {
    $time = microtime(true);
    $md->setUserAgent($user_agent);
    $md->isMobile();
    $md->isTablet();
    $md->is('Bot');
    $md->is('MobileBot');
    foreach ($this->md_browsers as $one_browser) if ($md->is($one_browser)) break;
    foreach ($this->md_devices as $one_device) if ($md->is($one_device)) break;
    foreach ($this->md_oses as $one_os) if ($md->is($one_os)) break;
    $md->mobileGrade();
    return microtime(true) - $time;
  }
  
  protected function bulkInitBrowscap()
  {
    get_browser(self::TEST_USER_AGENT);
  }
  
  protected function bulkTestBrowscap($user_agent)
  {
    $time = microtime(true);
    get_browser($user_agent);
    return microtime(true) - $time;
  }
  
  protected function bulkInitUai()
  {
    require_once 'uai/UserAgentInfoPeer.class.php';
    
    UserAgentInfoPeer::getMy();
  }
  
  protected function bulkTestUai($user_agent)
  {
    $time = microtime(true);
    UserAgentInfoPeer::getOther($user_agent);
    return microtime(true) - $time;
  }
  
  protected function executeExternalTest($uri, $user_agent)
  {
    $uri = $uri . '?opc=' . $this->has_opcache . '&ua=' . urlencode($user_agent);
    
    $output = file_get_contents($uri);
    
    if (!is_numeric($output))
    {
      throw new Exception("Calling $uri resulted in following output:\n$output");
    }
    
    return (float) $output;
  }
  
  protected function getRealUserAgents()
  {
    $real_uas = explode("\n", file_get_contents($this->ua_examples_file));
    
    $this->real_uas_count = count($real_uas);
    
    return $real_uas;
  }
  
  protected function getFakeUserAgents()
  {
    $fakes_count = floor($this->real_uas_count * self::REAL_TO_FAKE_RATIO);
    
    $fakes = array();
    
    for($i = 0; $i < $fakes_count; $i++)
    {
      $fakes[] = 'Really Not Real Thing (' . uniqid(null, true) . ' +https://github.com/quentin389)';
    }
    
    return $fakes;
  }
  
  protected static function getBoolean($value)
  {
    if (is_string($value))
    {
      if (ctype_digit($value))
      {
        return (boolean) $value;
      }
      else
      {
        return in_array($value, array('true', 'On', 'on'), true);
      }
    }
    else
    {
      return (boolean) $value;
    }
  }
  
  protected static function nameToCamelCase($name)
  {
    return str_replace(' ', '', ucwords(str_replace('-', ' ', $name)));
  }
}


<?php

require_once 'TWTimer.class.php';

class TestWrapper
{
  const TEST_USER_AGENT = 'thisisacompletelyrandomstringnoreallyitis';
  
  const CLASS_BROWSCAP = 'browscap';
  const CLASS_MOBILE_DETECT_PARTIAL = 'md-short';
  
  const REAL_TO_FAKE_RATIO = 1;
  
  protected $available_classes = array(
    self::CLASS_BROWSCAP,
    self::CLASS_MOBILE_DETECT_PARTIAL
  );
  
  protected $has_opcache;
  
  protected $echo_progress;
  
  protected $ua_examples_file = 'user-agent-examples.txt';
  
  protected $real_uas_count;
  
  public function __construct($echo_progress)
  {
    $this->has_opcache = self::getBoolean(ini_get('opcache.enable_cli'));
    
    $this->echo_progress = self::getBoolean($echo_progress);
    
    TWTimer::$echo_progress = $this->echo_progress;
  }
  
  public function executeOneTest($class_name, $bulk_check)
  {
    if (!in_array($class_name, $this->available_classes))
    {
      throw new Exception('Class name not one of: ' . implode(', ', $this->available_classes));
    }
    
    $bulk_check = self::getBoolean($bulk_check);
    
    if ($this->echo_progress)
    {
      echo "\n";
    }
    
    $this->{'test' . str_replace(' ', '', ucwords(str_replace('-', ' ', $class_name))) . ($bulk_check ? '_bulk' : '')}();
    
    if ($this->echo_progress)
    {
      TWTimer::printResults();
    }
    else
    {
      return TWTimer::getResults();
    }
  }
  
  protected function testMdShort_bulk()
  {
    // initialize and preload with the first call
    require_once 'md/Mobile_Detect.php';
    $md = new Mobile_Detect(array('' => 'x'), self::TEST_USER_AGENT);
    
    // test real user agents
    TWTimer::begin('Mobile_Detect partial - real - bulk', $this->has_opcache);
    foreach ($this->getRealUserAgents() as $one_agent)
    {
      TWTimer::start();
      $a = $md->isMobile($one_agent);
      $b = $md->isTablet($one_agent);
      TWTimer::stop();
    }
    TWTimer::end();
    
    // test fake user agents
    TWTimer::begin('Mobile_Detect partial - fake - bulk', $this->has_opcache);
    foreach ($this->getFakeUserAgents() as $one_agent)
    {
      TWTimer::start();
      $a = $md->isMobile($one_agent);
      $b = $md->isTablet($one_agent);
      TWTimer::stop();
    }
    TWTimer::end();
  }
  
  protected function testBrowscap_bulk()
  {
    // initialize and preload with the first call
    get_browser(self::TEST_USER_AGENT);
    
    // test real user agents
    TWTimer::begin('browscap - real - bulk', $this->has_opcache);
    foreach ($this->getRealUserAgents() as $one_agent)
    {
      TWTimer::start();
      $a = get_browser($one_agent);
      TWTimer::stop();
    }
    TWTimer::end();
    
    // test fake user agents
    TWTimer::begin('browscap - fake - bulk', $this->has_opcache);
    foreach ($this->getFakeUserAgents() as $one_agent)
    {
      TWTimer::start();
      $a = get_browser($one_agent);
      TWTimer::stop();
    }
    TWTimer::end();
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
}


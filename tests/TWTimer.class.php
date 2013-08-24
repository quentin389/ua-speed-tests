<?php

class TWTimer
{
  const TIMER_COUNT = 'count';
  const TIMER_MIN = 'min';
  const TIMER_MAX = 'max';
  const TIMER_TOTAL = 'total';
  const TIMER_ALL = 'all';
  
  const TIMER_PERCENTILE_50 = 'prc_50';
  const TIMER_PERCENTILE_95 = 'prc_95';
  const TIMER_PERCENTILE_99 = 'prc_99';
  
  public static $echo_progress;
  public static $echo_progress_interval = 100;
  public static $echo_progress_string = '.';
  
  protected static $tests = array();
  
  protected static $current_test;
  
  protected static $current_timer;
  
  public static function getResults()
  {
    $results = array();
    
    foreach (self::$tests as $name => $one_result)
    {
      unset($one_result[self::TIMER_ALL]);
      
      $results[$name] = $one_result;
    }
    
    return $results;
  }
  
  public static function printResults()
  {
    foreach (self::$tests as $name => $one_test)
    {
      $total = $one_test[self::TIMER_TOTAL];
      $count = $one_test[self::TIMER_COUNT];
      
      echo "\n";
      echo $name . ' run for ' . self::formatTime($total, true) . " ($count calls)\n";
      echo 'per call = ';
      echo 'avg '  . self::formatTime($total / $count, false) . ' / ';
      echo 'min ' . self::formatTime($one_test[self::TIMER_MIN], false) . ' / ';
      echo '50% in ' . self::formatTime($one_test[self::TIMER_PERCENTILE_50], false) . ' / ';
      echo '95% in ' . self::formatTime($one_test[self::TIMER_PERCENTILE_95], false) . ' / ';
      echo '99% in ' . self::formatTime($one_test[self::TIMER_PERCENTILE_99], false) . ' / ';
      echo 'max ' . self::formatTime($one_test[self::TIMER_MAX], false);
      echo "\n";
    }
    
    echo "\n";
  }
  
  public static function begin($name, $has_opcache)
  {
    $name .= ' - opcache ' . ($has_opcache ? 'on' : 'off');
    
    self::$current_test = $name;
    
    if (isset(self::$tests[$name]))
    {
      throw new Exception('Oh no you ain\'t!');
    }
    
    self::$tests[$name] = array(
      self::TIMER_COUNT => 0,
      self::TIMER_TOTAL => 0,
      self::TIMER_ALL => array()
    );
    
    if (self::$echo_progress)
    {
      echo "testing $name ";
    }
  }
  
  public static function start()
  {
    if (null !== self::$current_timer)
    {
      throw new Exception('Seriously?');
    }
    
    self::$current_timer = microtime(true);
  }
  
  public static function stop()
  {
    $time = microtime(true);
    
    if (null === self::$current_timer)
    {
      throw new Exception('U mad?');
    }
    
    $time -= self::$current_timer;
    
    self::$current_timer = null;
    
    self::saveTimeResult($time);
  }
  
  public static function add($time)
  {
    if (null !== self::$current_timer || !is_float($time) || $time < 0)
    {
      throw new Exception('You shall not pass!');
    }
    
    self::saveTimeResult($time);
  }
  
  public static function end()
  {
    if (self::$echo_progress)
    {
      echo ' ' . self::$tests[self::$current_test][self::TIMER_COUNT] . "\n";
    }
    
    $all_data = self::$tests[self::$current_test][self::TIMER_ALL];
    sort($all_data);
    self::$tests[self::$current_test][self::TIMER_PERCENTILE_50] = self::getPercentile($all_data, 50);
    self::$tests[self::$current_test][self::TIMER_PERCENTILE_95] = self::getPercentile($all_data, 95);
    self::$tests[self::$current_test][self::TIMER_PERCENTILE_99] = self::getPercentile($all_data, 99);
    self::$tests[self::$current_test][self::TIMER_MIN] = array_shift($all_data);
    self::$tests[self::$current_test][self::TIMER_MAX] = array_pop($all_data);
  }
  
  protected static function saveTimeResult($time)
  {
    self::$tests[self::$current_test][self::TIMER_COUNT]++;
    self::$tests[self::$current_test][self::TIMER_TOTAL] += $time;
    self::$tests[self::$current_test][self::TIMER_ALL][] = $time;
    
    if (self::$echo_progress && 0 === self::$tests[self::$current_test][self::TIMER_COUNT] % self::$echo_progress_interval)
    {
      echo self::$echo_progress_string;
    }
  }
  
  protected static function getPercentile($data, $percentile)
  {
    return $data[round(($percentile / 100) * count($data))];
  }
  
  protected static function formatTime($time_sec, $return_sec)
  {
    $time = $return_sec ? $time_sec : ($time_sec * 1000);
    
    return number_format($time, 1, '.', ',') . ($return_sec ? ' sec' : ' ms');
  }
}


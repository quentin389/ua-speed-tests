<?php

require_once 'TestWrapper.class.php';

if ($argc != 3)
{
  echo "\nphp execute-test.php <class-name> <bulk-check>\n\n";
  exit();
}

try
{
  $tests = new TestWrapper(true);
  $tests->executeOneTest($argv[1], $argv[2]);
}
catch (Exception $e)
{
  echo $e;
  exit();
}
<?php

require_once 'TestWrapper.class.php';

try
{
  $tests = new TestWrapper(true);
  $tests->executeAllTests();
}
catch (Exception $e)
{
  echo $e;
  exit();
}
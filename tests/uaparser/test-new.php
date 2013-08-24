<?php

$opc = $_GET['opc'];
$local_opc = ini_get('opcache.enable');
$ua = $_GET['ua'];

if ($local_opc != $opc)
{
  throw new Exception("$local_opc != $opc");
}


$time = microtime(true);

require_once 'uaparser-new.php';
$uap = new UAParserNew('regexes.php');
$uap->parse($ua);

echo microtime(true) - $time;

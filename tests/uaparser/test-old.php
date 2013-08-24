<?php

$opc = $_GET['opc'];
$local_opc = ini_get('opcache.enable');
$ua = $_GET['ua'];

if ($local_opc != $opc)
{
  throw new Exception("$local_opc != $opc");
}


$time = microtime(true);

require_once 'uaparser-old.php';
$uap = new UAParserOld('regexes.json');
$uap->parse($ua);

echo microtime(true) - $time;

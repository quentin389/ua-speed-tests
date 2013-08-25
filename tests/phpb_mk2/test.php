<?php

$opc = $_GET['opc'];
$local_opc = ini_get('opcache.enable');
$ua = $_GET['ua'];

if ($local_opc != $opc)
{
  throw new Exception("$local_opc != $opc");
}

$time = microtime(true);

require_once 'Browscap.php';

use phpbrowscapmk2\Browscap;

$bc = new Browscap('');
$bc->localFile = ini_get('browscap');
$bc->updateMethod = Browscap::UPDATE_LOCAL;
$bc->getBrowser($ua);

echo microtime(true) - $time;

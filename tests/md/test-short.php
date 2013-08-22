<?php

$opc = $_GET['opc'];
$local_opc = ini_get('opcache.enable');
$ua = $_GET['ua'];

if ($local_opc != $opc)
{
  throw new Exception("$local_opc != $opc");
}

$_SERVER['HTTP_USER_AGENT'] = $ua;

$time = microtime(true);


require_once 'Mobile_Detect.php';

$md = new Mobile_Detect();
$md->isMobile();
$md->isTablet();


echo microtime(true) - $time;
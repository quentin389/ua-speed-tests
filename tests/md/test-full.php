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

$md_browsers = array_keys(Mobile_Detect::getUserAgents());
$md_devices = array_keys(Mobile_Detect::getPhoneDevices() + Mobile_Detect::getTabletDevices());
$md_oses = array_keys(Mobile_Detect::getOperatingSystems());

$md = new Mobile_Detect();

$md->isMobile();
$md->isTablet();
$md->is('Bot');
$md->is('MobileBot');
foreach ($md_browsers as $one_browser) if ($md->is($one_browser)) break;
foreach ($md_devices as $one_device) if ($md->is($one_device)) break;
foreach ($md_oses as $one_os) if ($md->is($one_os)) break;
$md->mobileGrade();


echo microtime(true) - $time;
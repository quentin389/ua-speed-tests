<?php

$regexes = array(
'user_agent_parsers'=>array(
array(
'regex'=>'(HbbTV)/(\d+)\.(\d+)\.(\d+) \('
),
array(
'regex'=>'(SeaMonkey|Camino)/(\d+)\.(\d+)\.?([ab]?\d+[a-z]*)'
),
array(
'regex'=>'(Pale[Mm]oon)/(\d+)\.(\d+)\.?(\d+)?',
'family_replacement'=>'Pale Moon (Firefox Variant)'
),
array(
'regex'=>'(Fennec)/(\d+)\.(\d+)\.?([ab]?\d+[a-z]*)',
'family_replacement'=>'Firefox Mobile'
),
array(
'regex'=>'(Fennec)/(\d+)\.(\d+)(pre)',
'family_replacement'=>'Firefox Mobile'
),
array(
'regex'=>'(Fennec)/(\d+)\.(\d+)',
'family_replacement'=>'Firefox Mobile'
),
array(
'regex'=>'Mobile.*(Firefox)/(\d+)\.(\d+)',
'family_replacement'=>'Firefox Mobile'
),
array(
'regex'=>'(Namoroka|Shiretoko|Minefield)/(\d+)\.(\d+)\.(\d+(?:pre)?)',
'family_replacement'=>'Firefox ($1)'
),
array(
'regex'=>'(Firefox)/(\d+)\.(\d+)(a\d+[a-z]*)',
'family_replacement'=>'Firefox Alpha'
),
array(
'regex'=>'(Firefox)/(\d+)\.(\d+)(b\d+[a-z]*)',
'family_replacement'=>'Firefox Beta'
),
array(
'regex'=>'(Firefox)-(?:\d+\.\d+)?/(\d+)\.(\d+)(a\d+[a-z]*)',
'family_replacement'=>'Firefox Alpha'
),
array(
'regex'=>'(Firefox)-(?:\d+\.\d+)?/(\d+)\.(\d+)(b\d+[a-z]*)',
'family_replacement'=>'Firefox Beta'
),
array(
'regex'=>'(Namoroka|Shiretoko|Minefield)/(\d+)\.(\d+)([ab]\d+[a-z]*)?',
'family_replacement'=>'Firefox ($1)'
),
array(
'regex'=>'(Firefox).*Tablet browser (\d+)\.(\d+)\.(\d+)',
'family_replacement'=>'MicroB'
),
array(
'regex'=>'(MozillaDeveloperPreview)/(\d+)\.(\d+)([ab]\d+[a-z]*)?'
),
array(
'regex'=>'(Flock)/(\d+)\.(\d+)(b\d+?)'
),
array(
'regex'=>'(RockMelt)/(\d+)\.(\d+)\.(\d+)'
),
array(
'regex'=>'(Navigator)/(\d+)\.(\d+)\.(\d+)',
'family_replacement'=>'Netscape'
),
array(
'regex'=>'(Navigator)/(\d+)\.(\d+)([ab]\d+)',
'family_replacement'=>'Netscape'
),
array(
'regex'=>'(Netscape6)/(\d+)\.(\d+)\.(\d+)',
'family_replacement'=>'Netscape'
),
array(
'regex'=>'(MyIBrow)/(\d+)\.(\d+)',
'family_replacement'=>'My Internet Browser'
),
array(
'regex'=>'(Opera Tablet).*Version/(\d+)\.(\d+)(?:\.(\d+))?'
),
array(
'regex'=>'(Opera)/.+Opera Mobi.+Version/(\d+)\.(\d+)',
'family_replacement'=>'Opera Mobile'
),
array(
'regex'=>'Opera Mobi',
'family_replacement'=>'Opera Mobile'
),
array(
'regex'=>'(Opera Mini)/(\d+)\.(\d+)'
),
array(
'regex'=>'(Opera Mini)/att/(\d+)\.(\d+)'
),
array(
'regex'=>'(Opera)/9.80.*Version/(\d+)\.(\d+)(?:\.(\d+))?'
),
array(
'regex'=>'(?:Mobile Safari).*(OPR)/(\d+)\.(\d+)\.(\d+)',
'family_replacement'=>'Opera Mobile'
),
array(
'regex'=>'(?:Chrome).*(OPR)/(\d+)\.(\d+)\.(\d+)',
'family_replacement'=>'Opera'
),
array(
'regex'=>'(hpw|web)OS/(\d+)\.(\d+)(?:\.(\d+))?',
'family_replacement'=>'webOS Browser'
),
array(
'regex'=>'(luakit)',
'family_replacement'=>'LuaKit'
),
array(
'regex'=>'(Snowshoe)/(\d+)\.(\d+).(\d+)'
),
array(
'regex'=>'(Lightning)/(\d+)\.(\d+)([ab]?\d+[a-z]*)'
),
array(
'regex'=>'(Firefox)/(\d+)\.(\d+)\.(\d+(?:pre)?) \(Swiftfox\)',
'family_replacement'=>'Swiftfox'
),
array(
'regex'=>'(Firefox)/(\d+)\.(\d+)([ab]\d+[a-z]*)? \(Swiftfox\)',
'family_replacement'=>'Swiftfox'
),
array(
'regex'=>'(rekonq)/(\d+)\.(\d+)\.?(\d+)? Safari',
'family_replacement'=>'Rekonq'
),
array(
'regex'=>'rekonq',
'family_replacement'=>'Rekonq'
),
array(
'regex'=>'(conkeror|Conkeror)/(\d+)\.(\d+)\.?(\d+)?',
'family_replacement'=>'Conkeror'
),
array(
'regex'=>'(konqueror)/(\d+)\.(\d+)\.(\d+)',
'family_replacement'=>'Konqueror'
),
array(
'regex'=>'(WeTab)-Browser'
),
array(
'regex'=>'(Comodo_Dragon)/(\d+)\.(\d+)\.(\d+)',
'family_replacement'=>'Comodo Dragon'
),
array(
'regex'=>'(YottaaMonitor|BrowserMob|HttpMonitor|YandexBot|Slurp|BingPreview|PagePeeker|ThumbShotsBot|WebThumb|URL2PNG|ZooShot|GomezA|Catchpoint bot|Willow Internet Crawler|Google SketchUp|Read%20Later)'
),
array(
'regex'=>'(Symphony) (\d+).(\d+)'
),
array(
'regex'=>'(Minimo)'
),
array(
'regex'=>'(CrMo)/(\d+)\.(\d+)\.(\d+)\.(\d+)',
'family_replacement'=>'Chrome Mobile'
),
array(
'regex'=>'(CriOS)/(\d+)\.(\d+)\.(\d+)\.(\d+)',
'family_replacement'=>'Chrome Mobile iOS'
),
array(
'regex'=>'(Chrome)/(\d+)\.(\d+)\.(\d+)\.(\d+) Mobile',
'family_replacement'=>'Chrome Mobile'
),
array(
'regex'=>'(chromeframe)/(\d+)\.(\d+)\.(\d+)',
'family_replacement'=>'Chrome Frame'
),
array(
'regex'=>'(UCBrowser)[ /](\d+)\.(\d+)\.(\d+)',
'family_replacement'=>'UC Browser'
),
array(
'regex'=>'(UC Browser)[ /](\d+)\.(\d+)\.(\d+)'
),
array(
'regex'=>'(UC Browser|UCBrowser|UCWEB)(\d+)\.(\d+)\.(\d+)',
'family_replacement'=>'UC Browser'
),
array(
'regex'=>'(SLP Browser)/(\d+)\.(\d+)',
'family_replacement'=>'Tizen Browser'
),
array(
'regex'=>'(SE 2\.X) MetaSr (\d+)\.(\d+)',
'family_replacement'=>'Sogou Explorer'
),
array(
'regex'=>'(baidubrowser)[/\s](\d+)',
'family_replacement'=>'Baidu Browser'
),
array(
'regex'=>'(FlyFlow)/(\d+)\.(\d+)',
'family_replacement'=>'Baidu Explorer'
),
array(
'regex'=>'(Pingdom.com_bot_version_)(\d+)\.(\d+)',
'family_replacement'=>'PingdomBot'
),
array(
'regex'=>'(facebookexternalhit)/(\d+)\.(\d+)',
'family_replacement'=>'FacebookBot'
),
array(
'regex'=>'(Twitterbot)/(\d+)\.(\d+)',
'family_replacement'=>'TwitterBot'
),
array(
'regex'=>'(Rackspace Monitoring)/(\d+)\.(\d+)',
'family_replacement'=>'RackspaceBot'
),
array(
'regex'=>'(PyAMF)/(\d+)\.(\d+)\.(\d+)'
),
array(
'regex'=>'(YaBrowser)/(\d+)\.(\d+)\.(\d+)',
'family_replacement'=>'Yandex Browser'
),
array(
'regex'=>'(Chrome)/(\d+)\.(\d+)\.(\d+).* MRCHROME',
'family_replacement'=>'Mail.ru Chromium Browser'
),
array(
'regex'=>'(AOL) (\d+)\.(\d+); AOLBuild (\d+)'
),
array(
'regex'=>'(AdobeAIR|FireWeb|Jasmine|ANTGalio|Midori|Fresco|Lobo|PaleMoon|Maxthon|Lynx|OmniWeb|Dillo|Camino|Demeter|Fluid|Fennec|Epiphany|Shiira|Sunrise|Flock|Netscape|Lunascape|WebPilot|Vodafone|NetFront|Netfront|Konqueror|SeaMonkey|Kazehakase|Vienna|Iceape|Iceweasel|IceWeasel|Iron|K-Meleon|Sleipnir|Galeon|GranParadiso|Opera Mini|iCab|NetNewsWire|ThunderBrowse|Iris|UP\.Browser|Bunjalloo|Google Earth|Raven for Mac|Openwave)/(\d+)\.(\d+)\.(\d+)'
),
array(
'regex'=>'(Chromium|Chrome)/(\d+)\.(\d+)\.(\d+)'
),
array(
'regex'=>'(Bolt|Jasmine|IceCat|Skyfire|Midori|Maxthon|Lynx|Arora|IBrowse|Dillo|Camino|Shiira|Fennec|Phoenix|Chrome|Flock|Netscape|Lunascape|Epiphany|WebPilot|Opera Mini|Opera|Vodafone|NetFront|Netfront|Konqueror|Googlebot|SeaMonkey|Kazehakase|Vienna|Iceape|Iceweasel|IceWeasel|Iron|K-Meleon|Sleipnir|Galeon|GranParadiso|iCab|NetNewsWire|Space Bison|Stainless|Orca|Dolfin|BOLT|Minimo|Tizen Browser|Polaris|Abrowser|Planetweb|ICE Browser)/(\d+)\.(\d+)'
),
array(
'regex'=>'(Chromium|Chrome)/(\d+)\.(\d+)'
),
array(
'regex'=>'(iRider|Crazy Browser|SkipStone|iCab|Lunascape|Sleipnir|Maemo Browser) (\d+)\.(\d+)\.(\d+)'
),
array(
'regex'=>'(iCab|Lunascape|Opera|Android|Jasmine|Polaris) (\d+)\.(\d+)\.?(\d+)?'
),
array(
'regex'=>'(Kindle)/(\d+)\.(\d+)'
),
array(
'regex'=>'(Android) Donut',
'v1_replacement'=>1,
'v2_replacement'=>2
),
array(
'regex'=>'(Android) Eclair',
'v1_replacement'=>2,
'v2_replacement'=>1
),
array(
'regex'=>'(Android) Froyo',
'v1_replacement'=>2,
'v2_replacement'=>2
),
array(
'regex'=>'(Android) Gingerbread',
'v1_replacement'=>2,
'v2_replacement'=>3
),
array(
'regex'=>'(Android) Honeycomb',
'v1_replacement'=>3
),
array(
'regex'=>'(IEMobile)[ /](\d+)\.(\d+)',
'family_replacement'=>'IE Mobile'
),
array(
'regex'=>'(MSIE) (\d+)\.(\d+).*XBLWP7',
'family_replacement'=>'IE Large Screen'
),
array(
'regex'=>'(Firefox)/(\d+)\.(\d+)\.(\d+)'
),
array(
'regex'=>'(Firefox)/(\d+)\.(\d+)(pre|[ab]\d+[a-z]*)?'
),
array(
'regex'=>'(Obigo)InternetBrowser'
),
array(
'regex'=>'(Obigo)\-Browser'
),
array(
'regex'=>'(Obigo|OBIGO)[^\d]*(\d+)(?:.(\d+))?',
'family_replacement'=>'Obigo'
),
array(
'regex'=>'(MAXTHON|Maxthon) (\d+)\.(\d+)',
'family_replacement'=>'Maxthon'
),
array(
'regex'=>'(Maxthon|MyIE2|Uzbl|Shiira)',
'v1_replacement'=>0
),
array(
'regex'=>'PLAYSTATION 3.+WebKit',
'family_replacement'=>'NetFront NX'
),
array(
'regex'=>'PLAYSTATION 3',
'family_replacement'=>'NetFront'
),
array(
'regex'=>'(PlayStation Portable)',
'family_replacement'=>'NetFront'
),
array(
'regex'=>'(PlayStation Vita)',
'family_replacement'=>'NetFront NX'
),
array(
'regex'=>'AppleWebKit.+ (NX)/(\d+)\.(\d+)\.(\d+)',
'family_replacement'=>'NetFront NX'
),
array(
'regex'=>'(Nintendo 3DS)',
'family_replacement'=>'NetFront NX'
),
array(
'regex'=>'(BrowseX) \((\d+)\.(\d+)\.(\d+)'
),
array(
'regex'=>'(NCSA_Mosaic)/(\d+)\.(\d+)',
'family_replacement'=>'NCSA Mosaic'
),
array(
'regex'=>'(POLARIS)/(\d+)\.(\d+)',
'family_replacement'=>'Polaris'
),
array(
'regex'=>'(Embider)/(\d+)\.(\d+)',
'family_replacement'=>'Polaris'
),
array(
'regex'=>'(BonEcho)/(\d+)\.(\d+)\.(\d+)',
'family_replacement'=>'Bon Echo'
),
array(
'regex'=>'M?QQBrowser',
'family_replacement'=>'QQ Browser'
),
array(
'regex'=>'(iPod).+Version/(\d+)\.(\d+)\.(\d+)',
'family_replacement'=>'Mobile Safari'
),
array(
'regex'=>'(iPod).*Version/(\d+)\.(\d+)',
'family_replacement'=>'Mobile Safari'
),
array(
'regex'=>'(iPhone).*Version/(\d+)\.(\d+)\.(\d+)',
'family_replacement'=>'Mobile Safari'
),
array(
'regex'=>'(iPhone).*Version/(\d+)\.(\d+)',
'family_replacement'=>'Mobile Safari'
),
array(
'regex'=>'(iPad).*Version/(\d+)\.(\d+)\.(\d+)',
'family_replacement'=>'Mobile Safari'
),
array(
'regex'=>'(iPad).*Version/(\d+)\.(\d+)',
'family_replacement'=>'Mobile Safari'
),
array(
'regex'=>'(iPod|iPhone|iPad);.*CPU.*OS (\d+)(?:_\d+)?_(\d+).*Mobile',
'family_replacement'=>'Mobile Safari'
),
array(
'regex'=>'(iPod|iPhone|iPad)',
'family_replacement'=>'Mobile Safari'
),
array(
'regex'=>'(AvantGo) (\d+).(\d+)'
),
array(
'regex'=>'(OneBrowser)/(\d+).(\d+)',
'family_replacement'=>'ONE Browser'
),
array(
'regex'=>'(Avant)',
'v1_replacement'=>1
),
array(
'regex'=>'(QtCarBrowser)',
'v1_replacement'=>1
),
array(
'regex'=>'(iBrowser/Mini)(\d+).(\d+)',
'family_replacement'=>'iBrowser Mini'
),
array(
'regex'=>'^(Nokia)',
'family_replacement'=>'Nokia Services (WAP) Browser'
),
array(
'regex'=>'(NokiaBrowser)/(\d+)\.(\d+).(\d+)\.(\d+)',
'family_replacement'=>'Nokia Browser'
),
array(
'regex'=>'(NokiaBrowser)/(\d+)\.(\d+).(\d+)',
'family_replacement'=>'Nokia Browser'
),
array(
'regex'=>'(NokiaBrowser)/(\d+)\.(\d+)',
'family_replacement'=>'Nokia Browser'
),
array(
'regex'=>'(BrowserNG)/(\d+)\.(\d+).(\d+)',
'family_replacement'=>'Nokia Browser'
),
array(
'regex'=>'(Series60)/5\.0',
'family_replacement'=>'Nokia Browser',
'v1_replacement'=>7,
'v2_replacement'=>0
),
array(
'regex'=>'(Series60)/(\d+)\.(\d+)',
'family_replacement'=>'Nokia OSS Browser'
),
array(
'regex'=>'(S40OviBrowser)/(\d+)\.(\d+)\.(\d+)\.(\d+)',
'family_replacement'=>'Ovi Browser'
),
array(
'regex'=>'(Nokia)[EN]?(\d+)'
),
array(
'regex'=>'(BB10);',
'family_replacement'=>'BlackBerry WebKit'
),
array(
'regex'=>'(PlayBook).+RIM Tablet OS (\d+)\.(\d+)\.(\d+)',
'family_replacement'=>'BlackBerry WebKit'
),
array(
'regex'=>'(Black[bB]erry).+Version/(\d+)\.(\d+)\.(\d+)',
'family_replacement'=>'BlackBerry WebKit'
),
array(
'regex'=>'(Black[bB]erry)\s?(\d+)',
'family_replacement'=>'BlackBerry'
),
array(
'regex'=>'(OmniWeb)/v(\d+)\.(\d+)'
),
array(
'regex'=>'(Blazer)/(\d+)\.(\d+)',
'family_replacement'=>'Palm Blazer'
),
array(
'regex'=>'(Pre)/(\d+)\.(\d+)',
'family_replacement'=>'Palm Pre'
),
array(
'regex'=>'(ELinks)/(\d+)\.(\d+)'
),
array(
'regex'=>'(ELinks) \((\d+)\.(\d+)'
),
array(
'regex'=>'(Links) \((\d+)\.(\d+)'
),
array(
'regex'=>'(QtWeb) Internet Browser/(\d+)\.(\d+)'
),
array(
'regex'=>'(Silk)/(\d+)\.(\d+)(?:\.([0-9\-]+))?',
'family_replacement'=>'Amazon Silk'
),
array(
'regex'=>'(PhantomJS)/(\d+)\.(\d+)\.(\d+)'
),
array(
'regex'=>'(AppleWebKit)/(\d+)\.?(\d+)?\+ .* Safari',
'family_replacement'=>'WebKit Nightly'
),
array(
'regex'=>'(Version)/(\d+)\.(\d+)(?:\.(\d+))?.*Safari/',
'family_replacement'=>'Safari'
),
array(
'regex'=>'(Safari)/\d+'
),
array(
'regex'=>'(OLPC)/Update(\d+)\.(\d+)'
),
array(
'regex'=>'(OLPC)/Update()\.(\d+)',
'v1_replacement'=>0
),
array(
'regex'=>'(SEMC\-Browser)/(\d+)\.(\d+)'
),
array(
'regex'=>'(Teleca)',
'family_replacement'=>'Teleca Browser'
),
array(
'regex'=>'(Phantom)/V(\d+)\.(\d+)',
'family_replacement'=>'Phantom Browser'
),
array(
'regex'=>'([MS]?IE) (\d+)\.(\d+)',
'family_replacement'=>'IE'
),
array(
'regex'=>'Trident(.*)rv.(\d+)\.(\d+)',
'family_replacement'=>'IE'
),
array(
'regex'=>'(python-requests)/(\d+)\.(\d+)',
'family_replacement'=>'Python Requests'
)
),
'os_parsers'=>array(
array(
'regex'=>'HbbTV/\d+\.\d+\.\d+ \( ;(LG)E ;NetCast 4.0',
'os_v1_replacement'=>2013
),
array(
'regex'=>'HbbTV/\d+\.\d+\.\d+ \( ;(LG)E ;NetCast 3.0',
'os_v1_replacement'=>2012
),
array(
'regex'=>'HbbTV/1.1.1 \(;;;;;\) Maple_2011',
'os_replacement'=>'Samsung',
'os_v1_replacement'=>2011
),
array(
'regex'=>'HbbTV/\d+\.\d+\.\d+ \(;(Samsung);SmartTV([0-9]{4});.*FXPDEUC',
'os_v2_replacement'=>'UE40F7000'
),
array(
'regex'=>'HbbTV/\d+\.\d+\.\d+ \(;(Samsung);SmartTV([0-9]{4});.*MST12DEUC',
'os_v2_replacement'=>'UE32F4500'
),
array(
'regex'=>'HbbTV/1.1.1 \(; (Philips);.*NETTV/4',
'os_v1_replacement'=>2013
),
array(
'regex'=>'HbbTV/1.1.1 \(; (Philips);.*NETTV/3',
'os_v1_replacement'=>2012
),
array(
'regex'=>'HbbTV/1.1.1 \(; (Philips);.*NETTV/2',
'os_v1_replacement'=>2011
),
array(
'regex'=>'HbbTV/\d+\.\d+\.\d+.*(firetv)-firefox-plugin (\d+).(\d+).(\d+)',
'os_replacement'=>'FireHbbTV'
),
array(
'regex'=>'HbbTV/\d+\.\d+\.\d+ \(.*; ?([a-zA-Z]+) ?;.*(201[1-9]).*\)'
),
array(
'regex'=>'(Android) (\d+)\.(\d+)(?:[.\-]([a-z0-9]+))?'
),
array(
'regex'=>'(Android)\-(\d+)\.(\d+)(?:[.\-]([a-z0-9]+))?'
),
array(
'regex'=>'(Android) Donut',
'os_v1_replacement'=>1,
'os_v2_replacement'=>2
),
array(
'regex'=>'(Android) Eclair',
'os_v1_replacement'=>2,
'os_v2_replacement'=>1
),
array(
'regex'=>'(Android) Froyo',
'os_v1_replacement'=>2,
'os_v2_replacement'=>2
),
array(
'regex'=>'(Android) Gingerbread',
'os_v1_replacement'=>2,
'os_v2_replacement'=>3
),
array(
'regex'=>'(Android) Honeycomb',
'os_v1_replacement'=>3
),
array(
'regex'=>'(Silk-Accelerated=[a-z]{4,5})',
'os_replacement'=>'Android'
),
array(
'regex'=>'(Windows (?:NT 5\.2|NT 5\.1))',
'os_replacement'=>'Windows XP'
),
array(
'regex'=>'(XBLWP7)',
'os_replacement'=>'Windows Phone'
),
array(
'regex'=>'(Windows NT 6\.1)',
'os_replacement'=>'Windows 7'
),
array(
'regex'=>'(Windows NT 6\.0)',
'os_replacement'=>'Windows Vista'
),
array(
'regex'=>'(Win 9x 4\.90)',
'os_replacement'=>'Windows Me'
),
array(
'regex'=>'(Windows 98|Windows XP|Windows ME|Windows 95|Windows CE|Windows 7|Windows NT 4\.0|Windows Vista|Windows 2000|Windows 3.1)'
),
array(
'regex'=>'(Windows NT 6\.2; ARM;)',
'os_replacement'=>'Windows RT'
),
array(
'regex'=>'(Windows NT 6\.2)',
'os_replacement'=>'Windows 8'
),
array(
'regex'=>'(Windows NT 5\.0)',
'os_replacement'=>'Windows 2000'
),
array(
'regex'=>'(Windows Phone) (\d+)\.(\d+)'
),
array(
'regex'=>'(Windows Phone) OS (\d+)\.(\d+)'
),
array(
'regex'=>'(Windows ?Mobile)',
'os_replacement'=>'Windows Mobile'
),
array(
'regex'=>'(WinNT4.0)',
'os_replacement'=>'Windows NT 4.0'
),
array(
'regex'=>'(Win98)',
'os_replacement'=>'Windows 98'
),
array(
'regex'=>'(Tizen)/(\d+)\.(\d+)'
),
array(
'regex'=>'(Mac OS X) (\d+)[_.](\d+)(?:[_.](\d+))?'
),
array(
'regex'=>'Mac_PowerPC',
'os_replacement'=>'Mac OS'
),
array(
'regex'=>'(?:PPC|Intel) (Mac OS X)'
),
array(
'regex'=>'(CPU OS|iPhone OS) (\d+)_(\d+)(?:_(\d+))?',
'os_replacement'=>'iOS'
),
array(
'regex'=>'(iPhone|iPad|iPod); Opera',
'os_replacement'=>'iOS'
),
array(
'regex'=>'(iPhone|iPad|iPod).*Mac OS X.*Version/(\d+)\.(\d+)',
'os_replacement'=>'iOS'
),
array(
'regex'=>'(AppleTV)/(\d+)\.(\d+)',
'os_replacement'=>'ATV OS X'
),
array(
'regex'=>'(CrOS) [a-z0-9_]+ (\d+)\.(\d+)(?:\.(\d+))?',
'os_replacement'=>'Chrome OS'
),
array(
'regex'=>'([Dd]ebian)',
'os_replacement'=>'Debian'
),
array(
'regex'=>'(Linux Mint)(?:/(\d+))?'
),
array(
'regex'=>'(Mandriva)(?: Linux)?/(?:[\d.-]+m[a-z]{2}(\d+).(\d))?'
),
array(
'regex'=>'(Symbian[Oo][Ss])/(\d+)\.(\d+)',
'os_replacement'=>'Symbian OS'
),
array(
'regex'=>'(Symbian/3).+NokiaBrowser/7\.3',
'os_replacement'=>'Symbian^3 Anna'
),
array(
'regex'=>'(Symbian/3).+NokiaBrowser/7\.4',
'os_replacement'=>'Symbian^3 Belle'
),
array(
'regex'=>'(Symbian/3)',
'os_replacement'=>'Symbian^3'
),
array(
'regex'=>'(Series 60|SymbOS|S60)',
'os_replacement'=>'Symbian OS'
),
array(
'regex'=>'(MeeGo)'
),
array(
'regex'=>'Symbian [Oo][Ss]',
'os_replacement'=>'Symbian OS'
),
array(
'regex'=>'Series40;',
'os_replacement'=>'Nokia Series 40'
),
array(
'regex'=>'(BB10);.+Version/(\d+)\.(\d+)\.(\d+)',
'os_replacement'=>'BlackBerry OS'
),
array(
'regex'=>'(Black[Bb]erry)[0-9a-z]+/(\d+)\.(\d+)\.(\d+)(?:\.(\d+))?',
'os_replacement'=>'BlackBerry OS'
),
array(
'regex'=>'(Black[Bb]erry).+Version/(\d+)\.(\d+)\.(\d+)(?:\.(\d+))?',
'os_replacement'=>'BlackBerry OS'
),
array(
'regex'=>'(RIM Tablet OS) (\d+)\.(\d+)\.(\d+)',
'os_replacement'=>'BlackBerry Tablet OS'
),
array(
'regex'=>'(Play[Bb]ook)',
'os_replacement'=>'BlackBerry Tablet OS'
),
array(
'regex'=>'(Black[Bb]erry)',
'os_replacement'=>'BlackBerry OS'
),
array(
'regex'=>'\(Mobile;.+Firefox/\d+\.\d+',
'os_replacement'=>'Firefox OS'
),
array(
'regex'=>'(BREW)[ /](\d+)\.(\d+)\.(\d+)'
),
array(
'regex'=>'(BREW);'
),
array(
'regex'=>'(Brew MP|BMP)[ /](\d+)\.(\d+)\.(\d+)',
'os_replacement'=>'Brew MP'
),
array(
'regex'=>'BMP;',
'os_replacement'=>'Brew MP'
),
array(
'regex'=>'(GoogleTV) (\d+)\.(\d+)\.(\d+)'
),
array(
'regex'=>'(GoogleTV)/[\da-z]+'
),
array(
'regex'=>'(WebTV)/(\d+).(\d+)'
),
array(
'regex'=>'(hpw|web)OS/(\d+)\.(\d+)(?:\.(\d+))?',
'os_replacement'=>'webOS'
),
array(
'regex'=>'(VRE);'
),
array(
'regex'=>'(Fedora|Red Hat|PCLinuxOS)/(\d+)\.(\d+)\.(\d+)\.(\d+)'
),
array(
'regex'=>'(Red Hat|Puppy|PCLinuxOS)/(\d+)\.(\d+)\.(\d+)'
),
array(
'regex'=>'(Ubuntu|Kindle|Bada|Lubuntu|BackTrack|Red Hat|Slackware)/(\d+)\.(\d+)'
),
array(
'regex'=>'(Windows|OpenBSD|FreeBSD|NetBSD|Android|WeTab)'
),
array(
'regex'=>'(Ubuntu|Kubuntu|Arch Linux|CentOS|Slackware|Gentoo|openSUSE|SUSE|Red Hat|Fedora|PCLinuxOS|Gentoo|Mageia)'
),
array(
'regex'=>'(Linux)/(\d+)\.(\d+)'
),
array(
'regex'=>'(Linux|BSD)'
),
array(
'regex'=>'SunOS',
'os_replacement'=>'Solaris'
)
),
'device_parsers'=>array(
array(
'regex'=>'HTC ([A-Z][a-z0-9]+) Build',
'device_replacement'=>'HTC $1'
),
array(
'regex'=>'HTC ([A-Z][a-z0-9 ]+) \d+\.\d+\.\d+\.\d+',
'device_replacement'=>'HTC $1'
),
array(
'regex'=>'HTC_Touch_([A-Za-z0-9]+)',
'device_replacement'=>'HTC Touch ($1)'
),
array(
'regex'=>'USCCHTC(\d+)',
'device_replacement'=>'HTC $1 (US Cellular)'
),
array(
'regex'=>'Sprint APA(9292)',
'device_replacement'=>'HTC $1 (Sprint)'
),
array(
'regex'=>'HTC ([A-Za-z0-9]+ [A-Z])',
'device_replacement'=>'HTC $1'
),
array(
'regex'=>'HTC[-_/\s]([A-Za-z0-9]+)',
'device_replacement'=>'HTC $1'
),
array(
'regex'=>'(ADR[A-Za-z0-9]+)',
'device_replacement'=>'HTC $1'
),
array(
'regex'=>'(HTC)'
),
array(
'regex'=>'(QtCarBrowser)',
'device_replacement'=>'Tesla Model S'
),
array(
'regex'=>'(SamsungSGHi560)',
'device_replacement'=>'Samsung SGHi560'
),
array(
'regex'=>'SonyEricsson([A-Za-z0-9]+)/',
'device_replacement'=>'Ericsson $1'
),
array(
'regex'=>'PLAYSTATION 3',
'device_replacement'=>'PlayStation 3'
),
array(
'regex'=>'(PlayStation Portable)'
),
array(
'regex'=>'(PlayStation Vita)'
),
array(
'regex'=>'(KFOT Build)',
'device_replacement'=>'Kindle Fire'
),
array(
'regex'=>'(KFTT Build)',
'device_replacement'=>'Kindle Fire HD'
),
array(
'regex'=>'(KFJWI Build)',
'device_replacement'=>'Kindle Fire HD 8.9" WiFi'
),
array(
'regex'=>'(KFJWA Build)',
'device_replacement'=>'Kindle Fire HD 8.9" 4G'
),
array(
'regex'=>'(Kindle Fire)'
),
array(
'regex'=>'(Kindle)'
),
array(
'regex'=>'(Silk)/(\d+)\.(\d+)(?:\.([0-9\-]+))?',
'device_replacement'=>'Kindle Fire'
),
array(
'regex'=>'Android[\- ][\d]+\.[\d]+; [A-Za-z]{2}\-[A-Za-z]{0,2}; WOWMobile (.+) Build'
),
array(
'regex'=>'Android[\- ][\d]+\.[\d]+\-update1; [A-Za-z]{2}\-[A-Za-z]{0,2}; (.+) Build'
),
array(
'regex'=>'Android[\- ][\d]+\.[\d]+\.[\d]+; [A-Za-z]{2}\-[A-Za-z]{0,2}; (.+) Build'
),
array(
'regex'=>'Android[\- ][\d]+\.[\d]+\.[\d]+;[A-Za-z]{2}\-[A-Za-z]{0,2};(.+) Build'
),
array(
'regex'=>'Android[\- ][\d]+\.[\d]+; [A-Za-z]{2}\-[A-Za-z]{0,2}; (.+) Build'
),
array(
'regex'=>'Android[\- ][\d]+\.[\d]+\.[\d]+; (.+) Build'
),
array(
'regex'=>'Android[\- ][\d]+\.[\d]+; (.+) Build'
),
array(
'regex'=>'NokiaN([0-9]+)',
'device_replacement'=>'Nokia N$1'
),
array(
'regex'=>'NOKIA([A-Za-z0-9\v-]+)',
'device_replacement'=>'Nokia $1'
),
array(
'regex'=>'Nokia([A-Za-z0-9\v-]+)',
'device_replacement'=>'Nokia $1'
),
array(
'regex'=>'NOKIA ([A-Za-z0-9\-]+)',
'device_replacement'=>'Nokia $1'
),
array(
'regex'=>'Nokia ([A-Za-z0-9\-]+)',
'device_replacement'=>'Nokia $1'
),
array(
'regex'=>'Lumia ([A-Za-z0-9\-]+)',
'device_replacement'=>'Lumia $1'
),
array(
'regex'=>'Symbian',
'device_replacement'=>'Nokia'
),
array(
'regex'=>'BB10; ([A-Za-z0-9\- ]+)\)',
'device_replacement'=>'BlackBerry $1'
),
array(
'regex'=>'(PlayBook).+RIM Tablet OS',
'device_replacement'=>'BlackBerry Playbook'
),
array(
'regex'=>'Black[Bb]erry ([0-9]+);',
'device_replacement'=>'BlackBerry $1'
),
array(
'regex'=>'Black[Bb]erry([0-9]+)',
'device_replacement'=>'BlackBerry $1'
),
array(
'regex'=>'Black[Bb]erry;',
'device_replacement'=>'BlackBerry'
),
array(
'regex'=>'(Pre)/(\d+)\.(\d+)',
'device_replacement'=>'Palm Pre'
),
array(
'regex'=>'(Pixi)/(\d+)\.(\d+)',
'device_replacement'=>'Palm Pixi'
),
array(
'regex'=>'(Touch[Pp]ad)/(\d+)\.(\d+)',
'device_replacement'=>'HP TouchPad'
),
array(
'regex'=>'HPiPAQ([A-Za-z0-9]+)/(\d+).(\d+)',
'device_replacement'=>'HP iPAQ $1'
),
array(
'regex'=>'Palm([A-Za-z0-9]+)',
'device_replacement'=>'Palm $1'
),
array(
'regex'=>'Treo([A-Za-z0-9]+)',
'device_replacement'=>'Palm Treo $1'
),
array(
'regex'=>'webOS.*(P160UNA)/(\d+).(\d+)',
'device_replacement'=>'HP Veer'
),
array(
'regex'=>'(AppleTV)',
'device_replacement'=>'AppleTV'
),
array(
'regex'=>'AdsBot-Google-Mobile',
'device_replacement'=>'Spider'
),
array(
'regex'=>'Googlebot-Mobile/(\d+).(\d+)',
'device_replacement'=>'Spider'
),
array(
'regex'=>'(iPad) Simulator;'
),
array(
'regex'=>'(iPad);'
),
array(
'regex'=>'(iPod) touch;'
),
array(
'regex'=>'(iPod);'
),
array(
'regex'=>'(iPhone) Simulator;'
),
array(
'regex'=>'(iPhone);'
),
array(
'regex'=>'acer_([A-Za-z0-9]+)_',
'device_replacement'=>'Acer $1'
),
array(
'regex'=>'acer_([A-Za-z0-9]+)_',
'device_replacement'=>'Acer $1'
),
array(
'regex'=>'ALCATEL-([A-Za-z0-9]+)',
'device_replacement'=>'Alcatel $1'
),
array(
'regex'=>'Alcatel-([A-Za-z0-9]+)',
'device_replacement'=>'Alcatel $1'
),
array(
'regex'=>'Amoi\-([A-Za-z0-9]+)',
'device_replacement'=>'Amoi $1'
),
array(
'regex'=>'AMOI\-([A-Za-z0-9]+)',
'device_replacement'=>'Amoi $1'
),
array(
'regex'=>'Asus\-([A-Za-z0-9]+)',
'device_replacement'=>'Asus $1'
),
array(
'regex'=>'ASUS\-([A-Za-z0-9]+)',
'device_replacement'=>'Asus $1'
),
array(
'regex'=>'BIRD\-([A-Za-z0-9]+)',
'device_replacement'=>'Bird $1'
),
array(
'regex'=>'BIRD\.([A-Za-z0-9]+)',
'device_replacement'=>'Bird $1'
),
array(
'regex'=>'BIRD ([A-Za-z0-9]+)',
'device_replacement'=>'Bird $1'
),
array(
'regex'=>'Dell ([A-Za-z0-9]+)',
'device_replacement'=>'Dell $1'
),
array(
'regex'=>'DoCoMo/2\.0 ([A-Za-z0-9]+)',
'device_replacement'=>'DoCoMo $1'
),
array(
'regex'=>'([A-Za-z0-9]+)_W\;FOMA',
'device_replacement'=>'DoCoMo $1'
),
array(
'regex'=>'([A-Za-z0-9]+)\;FOMA',
'device_replacement'=>'DoCoMo $1'
),
array(
'regex'=>'Huawei([A-Za-z0-9]+)',
'device_replacement'=>'Huawei $1'
),
array(
'regex'=>'HUAWEI-([A-Za-z0-9]+)',
'device_replacement'=>'Huawei $1'
),
array(
'regex'=>'vodafone([A-Za-z0-9]+)',
'device_replacement'=>'Huawei Vodafone $1'
),
array(
'regex'=>'i\-mate ([A-Za-z0-9]+)',
'device_replacement'=>'i-mate $1'
),
array(
'regex'=>'Kyocera\-([A-Za-z0-9]+)',
'device_replacement'=>'Kyocera $1'
),
array(
'regex'=>'KWC\-([A-Za-z0-9]+)',
'device_replacement'=>'Kyocera $1'
),
array(
'regex'=>'Lenovo\-([A-Za-z0-9]+)',
'device_replacement'=>'Lenovo $1'
),
array(
'regex'=>'Lenovo_([A-Za-z0-9]+)',
'device_replacement'=>'Lenovo $1'
),
array(
'regex'=>'(HbbTV)/[0-9]+\.[0-9]+\.[0-9]+'
),
array(
'regex'=>'LG/([A-Za-z0-9]+)',
'device_replacement'=>'LG $1'
),
array(
'regex'=>'LG-LG([A-Za-z0-9]+)',
'device_replacement'=>'LG $1'
),
array(
'regex'=>'LGE-LG([A-Za-z0-9]+)',
'device_replacement'=>'LG $1'
),
array(
'regex'=>'LGE VX([A-Za-z0-9]+)',
'device_replacement'=>'LG $1'
),
array(
'regex'=>'LG ([A-Za-z0-9]+)',
'device_replacement'=>'LG $1'
),
array(
'regex'=>'LGE LG\-AX([A-Za-z0-9]+)',
'device_replacement'=>'LG $1'
),
array(
'regex'=>'LG\-([A-Za-z0-9]+)',
'device_replacement'=>'LG $1'
),
array(
'regex'=>'LGE\-([A-Za-z0-9]+)',
'device_replacement'=>'LG $1'
),
array(
'regex'=>'LG([A-Za-z0-9]+)',
'device_replacement'=>'LG $1'
),
array(
'regex'=>'(KIN)\.One (\d+)\.(\d+)',
'device_replacement'=>'Microsoft $1'
),
array(
'regex'=>'(KIN)\.Two (\d+)\.(\d+)',
'device_replacement'=>'Microsoft $1'
),
array(
'regex'=>'(Motorola)\-([A-Za-z0-9]+)'
),
array(
'regex'=>'MOTO\-([A-Za-z0-9]+)',
'device_replacement'=>'Motorola $1'
),
array(
'regex'=>'MOT\-([A-Za-z0-9]+)',
'device_replacement'=>'Motorola $1'
),
array(
'regex'=>'(Nintendo WiiU)',
'device_replacement'=>'Nintendo Wii U'
),
array(
'regex'=>'Nintendo (DS|3DS|DSi|Wii);',
'device_replacement'=>'Nintendo $1'
),
array(
'regex'=>'Pantech([A-Za-z0-9]+)',
'device_replacement'=>'Pantech $1'
),
array(
'regex'=>'Philips([A-Za-z0-9]+)',
'device_replacement'=>'Philips $1'
),
array(
'regex'=>'Philips ([A-Za-z0-9]+)',
'device_replacement'=>'Philips $1'
),
array(
'regex'=>'SAMSUNG-([A-Za-z0-9\-]+)',
'device_replacement'=>'Samsung $1'
),
array(
'regex'=>'SAMSUNG\; ([A-Za-z0-9\-]+)',
'device_replacement'=>'Samsung $1'
),
array(
'regex'=>'Dreamcast',
'device_replacement'=>'Sega Dreamcast'
),
array(
'regex'=>'Softbank/1\.0/([A-Za-z0-9]+)',
'device_replacement'=>'Softbank $1'
),
array(
'regex'=>'Softbank/2\.0/([A-Za-z0-9]+)',
'device_replacement'=>'Softbank $1'
),
array(
'regex'=>'(WebTV)/(\d+).(\d+)'
),
array(
'regex'=>'(hiptop|avantgo|plucker|xiino|blazer|elaine|up.browser|up.link|mmp|smartphone|midp|wap|vodafone|o2|pocket|mobile|pda)',
'device_replacement'=>'Generic Smartphone'
),
array(
'regex'=>'^(1207|3gso|4thp|501i|502i|503i|504i|505i|506i|6310|6590|770s|802s|a wa|acer|acs\-|airn|alav|asus|attw|au\-m|aur |aus |abac|acoo|aiko|alco|alca|amoi|anex|anny|anyw|aptu|arch|argo|bell|bird|bw\-n|bw\-u|beck|benq|bilb|blac|c55/|cdm\-|chtm|capi|comp|cond|craw|dall|dbte|dc\-s|dica|ds\-d|ds12|dait|devi|dmob|doco|dopo|el49|erk0|esl8|ez40|ez60|ez70|ezos|ezze|elai|emul|eric|ezwa|fake|fly\-|fly_|g\-mo|g1 u|g560|gf\-5|grun|gene|go.w|good|grad|hcit|hd\-m|hd\-p|hd\-t|hei\-|hp i|hpip|hs\-c|htc |htc\-|htca|htcg)',
'device_replacement'=>'Generic Feature Phone'
),
array(
'regex'=>'^(htcp|htcs|htct|htc_|haie|hita|huaw|hutc|i\-20|i\-go|i\-ma|i230|iac|iac\-|iac/|ig01|im1k|inno|iris|jata|java|kddi|kgt|kgt/|kpt |kwc\-|klon|lexi|lg g|lg\-a|lg\-b|lg\-c|lg\-d|lg\-f|lg\-g|lg\-k|lg\-l|lg\-m|lg\-o|lg\-p|lg\-s|lg\-t|lg\-u|lg\-w|lg/k|lg/l|lg/u|lg50|lg54|lge\-|lge/|lynx|leno|m1\-w|m3ga|m50/|maui|mc01|mc21|mcca|medi|meri|mio8|mioa|mo01|mo02|mode|modo|mot |mot\-|mt50|mtp1|mtv |mate|maxo|merc|mits|mobi|motv|mozz|n100|n101|n102|n202|n203|n300|n302|n500|n502|n505|n700|n701|n710|nec\-|nem\-|newg|neon)',
'device_replacement'=>'Generic Feature Phone'
),
array(
'regex'=>'^(netf|noki|nzph|o2 x|o2\-x|opwv|owg1|opti|oran|ot\-s|p800|pand|pg\-1|pg\-2|pg\-3|pg\-6|pg\-8|pg\-c|pg13|phil|pn\-2|pt\-g|palm|pana|pire|pock|pose|psio|qa\-a|qc\-2|qc\-3|qc\-5|qc\-7|qc07|qc12|qc21|qc32|qc60|qci\-|qwap|qtek|r380|r600|raks|rim9|rove|s55/|sage|sams|sc01|sch\-|scp\-|sdk/|se47|sec\-|sec0|sec1|semc|sgh\-|shar|sie\-|sk\-0|sl45|slid|smb3|smt5|sp01|sph\-|spv |spv\-|sy01|samm|sany|sava|scoo|send|siem|smar|smit|soft|sony|t\-mo|t218|t250|t600|t610|t618|tcl\-|tdg\-|telm|tim\-|ts70|tsm\-|tsm3|tsm5|tx\-9|tagt)',
'device_replacement'=>'Generic Feature Phone'
),
array(
'regex'=>'^(talk|teli|topl|tosh|up.b|upg1|utst|v400|v750|veri|vk\-v|vk40|vk50|vk52|vk53|vm40|vx98|virg|vite|voda|vulc|w3c |w3c\-|wapj|wapp|wapu|wapm|wig |wapi|wapr|wapv|wapy|wapa|waps|wapt|winc|winw|wonu|x700|xda2|xdag|yas\-|your|zte\-|zeto|aste|audi|avan|blaz|brew|brvw|bumb|ccwa|cell|cldc|cmd\-|dang|eml2|fetc|hipt|http|ibro|idea|ikom|ipaq|jbro|jemu|jigs|keji|kyoc|kyok|libw|m\-cr|midp|mmef|moto|mwbp|mywa|newt|nok6|o2im|pant|pdxg|play|pluc|port|prox|rozo|sama|seri|smal|symb|treo|upsi|vx52|vx53|vx60|vx61|vx70|vx80|vx81|vx83|vx85|wap\-|webc|whit|wmlb|xda\-|xda_)',
'device_replacement'=>'Generic Feature Phone'
),
array(
'regex'=>'(bot|borg|google(^tv)|yahoo|slurp|msnbot|msrbot|openbot|archiver|netresearch|lycos|scooter|altavista|teoma|gigabot|baiduspider|blitzbot|oegp|charlotte|furlbot|http%20client|polybot|htdig|ichiro|mogimogi|larbin|pompos|scrubby|searchsight|seekbot|semanticdiscovery|silk|snappy|speedy|spider|voila|vortex|voyager|zao|zeal|fast\-webcrawler|converacrawler|dataparksearch|findlinks|crawler)',
'device_replacement'=>'Spider'
)
)
);


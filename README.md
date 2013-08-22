ua-speed-tests
==============

Compare performance of user agent detecting classes used in PHP. Single and bulk reading. Compared: Mobile-Detect, ua-parser, browscap, UserAgentInfo, ...

The classes are all CPU bound (at least on my config with apache).

see raw_results.txt

* **browscap** - PHP standard `get_browser()` call (btw: add benchmarks for lite/full source file.
* **Mobile_Detect partial** - `Mobile_Detect->isMobile()` + `Mobile_Detect->isTablet()` calls.
* **opcache** - Zend Opcache is a bytecode cache for PHP - something you should be using on your production servers, especially for huge frameworks. Alternatives: APC (the bytecode part, not the key-value store), Eaccelerator, ... (?)


Add tests for many calls to the same thing during one script calls (not batch mode though, simulate standard user)? I'm not sure if it makes sense, I can just write 'caches calls locally': true / false.


2506 calls per test

name | ua list | bulk | opcache | total (sec) | avg (ms) | min (ms) | 50% (ms) | 95% (ms) | 99% (ms) | max (ms)
--- | :---: | :---: | :---: | ---: | ---: | ---: | ---: | ---: | ---: | ---:
browscap | real | no | any | 58.2 | **23.2** | 2.3 | 23.3 | 28.0 | 29.9 | 36.1
 | fake | | any | 48.0 | **19.2** | 16.6 | 19.1 | 20.7 | 21.8 | 24.0
 | real | yes | any | 110.4 | **44.0** | 5.8 | 44.2 | 49.2 | 54.9 | 74.3
 | fake | | any | 100.7 | **40.2** | 37.6 | 40.0 | 42.6 | 44.3 | 57.7
md partial | any | no | off | 6.2 | **2.5** | 0.4 | 2.4 | 3.8 | 4.9 | 6.3
 | any | | on | 4.5 | **1.8** | 0.0 | 1.6 | 3.1 | 4.8 | 36.0
 | any | yes | any | 4.2 | **1.7** | 0.0 | 1.6 | 3.0 | 4.2 | 5.7

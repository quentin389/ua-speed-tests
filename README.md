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
--- | --- | --- | --- | --- | --- | --- | --- | --- | --- | ---
browscap | real | yes | off | 110.4 | **44.0** | 5.8 | 44.2 | 49.2 | 54.9 | 74.3
 | fake | | off | 100.7 | **40.2** | 37.6 | 40.0 | 42.6 | 44.3 | 57.7
 | real | | on | 110.7 | **44.2** | 5.4 | 44.5 | 49.3 | 52.1 | 60.8
 | fake | | on | 100.3 | **40.0** | 37.4 | 39.8 | 42.5 | 44.2 | 45.9
 | real | no | off | 58.2 | **23.2** | 2.3 | 23.3 | 28.0 | 29.9 | 36.1
 | fake | | off | 48.0 | **19.2** | 16.6 | 19.1 | 20.7 | 21.8 | 24.0
 | real | | on | 59.8 | **23.9** | 2.1 | 24.0 | 28.5 | 30.6 | 44.4
 | fake | | on | 49.6 | **19.8** | 17.1 | 19.7 | 21.8 | 23.4 | 31.7
md partial | real | yes | off | 4.2 | **1.7** | 0.0 | 1.6 | 3.0 | 4.2 | 5.7
 | fake | | off | 4.0 | **1.6** | 0.4 | 1.5 | 2.2 | 2.6 | 3.1
 | real | | on | 4.1 | **1.6** | 0.0 | 1.5 | 2.9 | 3.8 | 5.3
 | fake | | on | 3.9 | **1.6** | 0.3 | 1.5 | 2.2 | 2.5 | 3.0
 | real | no | off | 6.2 | **2.5** | 0.4 | 2.4 | 3.8 | 4.9 | 6.3
 | fake | | off | 5.9 | **2.3** | 1.0 | 2.3 | 3.1 | 3.6 | 4.5
 | real | | on | 4.5 | **1.8** | 0.0 | 1.6 | 3.1 | 4.8 | 36.0
 | fake | | on | 4.1 | **1.7** | 0.2 | 1.6 | 2.4 | 2.7 | 3.4

ua-speed-tests
==============

Compare performance of user agent detecting classes used in PHP. Single and bulk reading. Compared: Mobile-Detect, ua-parser, browscap, UserAgentInfo, ...

The classes are all CPU bound (at least on my config with apache).

results
=======

See [results.full.txt](results.full.txt) for raw results.

- **'opcache'** - that should be turned on on your production servers!
- **ua list 'real'** - real life user agent examples
- **ua list 'fake'** - user agents that will never match anything
- **Mobile_Detect 'partial'** - only `->isMobile()` and `->isTablet()` (most typical usage)
- **Mobile_Detect 'full'** - get as much information as you can
- **ua-parser 'original'** - current version
- **ua-parser 'revised'** - source json file replaced with php array file
- **'lite'**, **'standard'**, **'full'** - different versions of the source file for browscap based parsers
- **phpbrowscap max times** - this is a time it takes to parse the downloaded source file into the cache file format;
  cache regeneration occurs rarely (default: every 5 days)

Each row is one test. Eeach test was performed on 2506 user agent strings.

### one per script (typical usage)
name | version | ua list | opcache | total (sec) | avg (ms) | min (ms) | 50% (ms) | 95% (ms) | 99% (ms) | max (ms)
:--- | :--- | :---: | :---: | ---: | ---: | ---: | ---: | ---: | ---: | ---:
[Mobile Detect](https://github.com/serbanghita/Mobile-Detect) | partial | real | off | 6.0 | 2.4 | 0.3 | **2.3** | 3.6 | 4.7 | 5.9
 | partial | real | on | 4.2 | 1.7 | 0.0 | **1.6** | 3.0 | 4.1 | 7.6
 | full | real | off | 16.3 | 6.5 | 0.8 | **6.6** | 9.3 | 12.6 | 16.9
 | full | real | on | 14.2 | 5.7 | 0.5 | **5.8** | 8.5 | 12.0 | 14.4
[ua-parser](https://github.com/tobie/ua-parser) | original | real | off | 3.4 | 1.3 | 0.1 | **1.3** | 2.0 | 2.3 | 11.9
 | original | real | on | 2.6 | 1.0 | 0.0 | **1.0** | 1.7 | 2.0 | 2.5
 | revised | real | off | 3.4 | 1.4 | 0.2 | **1.3** | 2.0 | 2.4 | 3.1
 | revised | real | on | 1.6 | 0.6 | 0.0 | **0.6** | 1.1 | 1.5 | 2.2
[browscap](http://www.php.net/get_browser) | lite | real | off | 9.6 | 3.8 | 0.1 | **3.7** | 7.0 | 9.0 | 27.9
 | lite | fake | off | 3.0 | 1.2 | 0.1 | **1.2** | 1.8 | 2.0 | 2.6
 | lite | real | on | 9.2 | 3.7 | 0.2 | **3.6** | 6.8 | 8.2 | 14.2
 | lite | fake | on | 3.0 | 1.2 | 0.3 | **1.2** | 1.8 | 2.0 | 3.4
 | standard | real | off | 58.9 | 23.5 | 2.9 | **23.7** | 28.0 | 30.3 | 37.7
 | standard | real | on | 58.5 | 23.3 | 2.7 | **23.5** | 28.1 | 29.5 | 36.8
 | full | real | off | 57.8 | 23.1 | 2.8 | **23.2** | 27.8 | 29.3 | 35.8
 | full | real | on | 58.5 | 23.4 | 2.7 | **23.4** | 28.4 | 30.6 | 35.2
[phpbrowscap original](https://github.com/GaretJax/phpbrowscap) | standard | real | off | 57.1 | **22.8** | 14.8 | **18.9** | 40.5 | 44.1 | _251.5_
 | standard | fake | off | 95.5 | 38.1 | 35.7 | **38.0** | 39.9 | 41.4 | 46.0
 | standard | real | on | 22.3 | **8.9** | 2.1 | **5.1** | 24.7 | 28.7 | _262.1_
 | standard | fake | on | 60.8 | 24.2 | 22.0 | **24.1** | 25.7 | 26.7 | 30.1
 | full | real | off | 62.2 | **24.8** | 17.4 | **20.9** | 41.4 | 46.2 | _296.2_
 | full | fake | off | 102.2 | 40.8 | 37.6 | **40.6** | 43.3 | 45.0 | 55.9
 | full | real | on | 24.1 | **9.6** | 1.9 | **5.6** | 26.6 | 30.6 | _293.2_
 | full | fake | on | 66.2 | 26.4 | 23.1 | **26.2** | 28.7 | 30.2 | 33.5
[phpbrowscap mark2](https://github.com/quentin389/phpbrowscap-mark2) | standard | real | off | 17.8 | 7.1 | 5.1 | **6.8** | 8.8 | 11.6 | _278.3_
 | standard | fake | off | 19.4 | 7.7 | 6.2 | **7.7** | 8.4 | 8.8 | 11.0
 | standard | real | on | 4.1 | 1.6 | 0.0 | **1.2** | 3.5 | 5.7 | _281.2_
 | standard | fake | on | 5.9 | 2.4 | 1.0 | **2.2** | 3.1 | 3.5 | 23.7
 | full | real | off | 19.3 | 7.7 | 5.5 | **7.4** | 9.7 | 11.8 | _305.4_
 | full | fake | off | 21.3 | 8.5 | 6.7 | **8.5** | 9.4 | 9.9 | 37.5
 | full | real | on | 4.2 | 1.7 | 0.0 | **1.2** | 3.6 | 5.8 | _312.0_
 | full | fake | on | 6.0 | 2.4 | 1.0 | **2.3** | 3.2 | 3.7 | 24.0

### bulk processing, opcache off
name | version | ua list | total (sec) | avg (ms) | min (ms) | 50% (ms) | 95% (ms) | 99% (ms) | max (ms)
:--- | :--- |:---: | ---: | ---: | ---: | ---: | ---: | ---: | ---:
[Mobile Detect](https://github.com/serbanghita/Mobile-Detect) | partial | real | 4.1 | 1.6 | 0.0 | **1.6** | 2.9 | 3.8 | 5.1
 | full | real | 14.1 | 5.6 | 0.4 | **5.8** | 8.5 | 11.9 | 15.0
[ua-parser](https://github.com/tobie/ua-parser) | original | real | 1.3 | 0.5 | 0.0 | **0.5** | 1.0 | 1.4 | 2.8
 | revised | real | 1.3 | 0.5 | 0.0 | **0.5** | 1.0 | 1.3 | 2.1
[browscap](http://www.php.net/get_browser) | lite | real | 9.1 | 3.6 | 0.2 | **3.5** | 6.7 | 7.8 | 12.5
 | lite | fake | 2.8 | 1.1 | 0.1 | **1.0** | 1.7 | 2.0 | 3.4
 | standard | real | 112.9 | 45.1 | 5.4 | **45.3** | 50.0 | 52.1 | 58.5
 | full | real | 108.6 | 43.3 | 5.1 | **43.6** | 48.1 | 50.4 | 60.9
[phpbrowscap original](https://github.com/GaretJax/phpbrowscap) | standard | real | 24.1 | **9.6** | 0.0 | **1.8** | 42.7 | 47.0 | _269.2_
 | standard | fake | 107.9 | 43.1 | 39.9 | **42.8** | 45.5 | 47.5 | 53.3
 | full | real | 24.2 | **9.7** | 0.0 | **1.8** | 43.3 | 47.4 | _285.2_
 | full | fake | 109.4 | 43.7 | 39.7 | **43.3** | 47.5 | 50.7 | 78.1
[phpbrowscap mark2](https://github.com/quentin389/phpbrowscap-mark2) | standard | real | 2.0 | 0.8 | 0.0 | **0.4** | 2.3 | 4.2 | _307.4_
 | standard | fake | 3.7 | 1.5 | 0.2 | **1.4** | 2.1 | 2.4 | 3.2
 | full | real | 2.1 | 0.8 | 0.0 | **0.4** | 2.4 | 4.4 | _328.8_
 | full | fake | 3.7 | 1.5 | 0.5 | **1.4** | 2.1 | 2.4 | 3.3

TODO
====

- Add tests for many calls to the same thing during one script calls (not batch mode though, simulate standard user)? I'm not sure if it makes sense, I can just write 'caches calls locally': true / false.
- Add test for repeated found and not found user agent string.
- Add % of detected browsers. (as a separate test)
- Add most popular recent user agents to the file (not only those not detected by browscap! (www.vwp-online.de/ua.php + list for browscap + my list + ua-parser + md)

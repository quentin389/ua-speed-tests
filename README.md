ua-speed-tests
==============

Compare performance of user agent detecting classes used in PHP. Single and bulk reading. Compared: Mobile-Detect, ua-parser, browscap, UserAgentInfo, ...

The classes are all CPU bound (at least on my config with apache).

see raw_results.txt

**browscap** - PHP standard `get_browser()` call (btw: add benchmarks for lite/full source file.
**Mobile_Detect partial** - `Mobile_Detect->isMobile()` + `Mobile_Detect->isTablet()` calls.
**opcache** - Zend Opcache is a bytecode cache for PHP - something you should be using on your production servers, especially for huge frameworks.
  Alternatives: APC (the bytecode part, not the key-value store), Eaccelerator, ... (?)


Add tests for many calls to the same thing during one script calls (not batch mode though, simulate standard user)? I'm not sure if it makes sense, I can just write 'caches calls locally': true / false.
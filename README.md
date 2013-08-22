ua-speed-tests
==============

Compare performance of user agent detecting classes used in PHP. Single and bulk reading. Compared: Mobile-Detect, ua-parser, browscap, UserAgentInfo, ...

The classes are all CPU bound (at least on my config with apache).

see raw_results.txt

* **browscap** - PHP standard `get_browser()` call (btw: add benchmarks for lite/full source file.
* **Mobile_Detect partial** - `Mobile_Detect->isMobile()` + `Mobile_Detect->isTablet()` calls.
* **opcache** - Zend Opcache is a bytecode cache for PHP - something you should be using on your production servers, especially for huge frameworks. Alternatives: APC (the bytecode part, not the key-value store), Eaccelerator, ... (?)


Add tests for many calls to the same thing during one script calls (not batch mode though, simulate standard user)? I'm not sure if it makes sense, I can just write 'caches calls locally': true / false.


per call = avg 44.0 ms /  min 5.8 ms / 50% in 44.2 ms / 95% in 49.2 ms / 99% in 54.9 ms / max 74.3 ms - browscap - real - bulk - opcache off run for 110.4 sec (2506 calls)
per call = avg 40.2 ms / min 37.6 ms / 50% in 40.0 ms / 95% in 42.6 ms / 99% in 44.3 ms / max 57.7 ms - browscap - fake - bulk - opcache off run for 100.7 sec (2506 calls)
per call = avg 44.2 ms /  min 5.4 ms / 50% in 44.5 ms / 95% in 49.3 ms / 99% in 52.1 ms / max 60.8 ms - browscap - real - bulk - opcache on run for 110.7 sec (2506 calls)
per call = avg 40.0 ms / min 37.4 ms / 50% in 39.8 ms / 95% in 42.5 ms / 99% in 44.2 ms / max 45.9 ms - browscap - fake - bulk - opcache on run for 100.3 sec (2506 calls)
per call = avg 23.2 ms /  min 2.3 ms / 50% in 23.3 ms / 95% in 28.0 ms / 99% in 29.9 ms / max 36.1 ms - browscap - real - one per script - opcache off run for 58.2 sec (2506 calls)
per call = avg 19.2 ms / min 16.6 ms / 50% in 19.1 ms / 95% in 20.7 ms / 99% in 21.8 ms / max 24.0 ms - browscap - fake - one per script - opcache off run for 48.0 sec (2506 calls)
per call = avg 23.9 ms /  min 2.1 ms / 50% in 24.0 ms / 95% in 28.5 ms / 99% in 30.6 ms / max 44.4 ms - browscap - real - one per script - opcache on run for 59.8 sec (2506 calls)
per call = avg 19.8 ms / min 17.1 ms / 50% in 19.7 ms / 95% in 21.8 ms / 99% in 23.4 ms / max 31.7 ms - browscap - fake - one per script - opcache on run for 49.6 sec (2506 calls)
per call =  avg 1.7 ms /  min 0.0 ms /  50% in 1.6 ms /  95% in 3.0 ms /  99% in 4.2 ms /  max 5.7 ms - Mobile_Detect partial - real - bulk - opcache off run for 4.2 sec (2506 calls)
per call =  avg 1.6 ms /  min 0.4 ms /  50% in 1.5 ms /  95% in 2.2 ms /  99% in 2.6 ms /  max 3.1 ms - Mobile_Detect partial - fake - bulk - opcache off run for 4.0 sec (2506 calls)
per call =  avg 1.6 ms /  min 0.0 ms /  50% in 1.5 ms /  95% in 2.9 ms /  99% in 3.8 ms /  max 5.3 ms - Mobile_Detect partial - real - bulk - opcache on run for 4.1 sec (2506 calls)
per call =  avg 1.6 ms /  min 0.3 ms /  50% in 1.5 ms /  95% in 2.2 ms /  99% in 2.5 ms /  max 3.0 ms - Mobile_Detect partial - fake - bulk - opcache on run for 3.9 sec (2506 calls)
per call =  avg 2.5 ms /  min 0.4 ms /  50% in 2.4 ms /  95% in 3.8 ms /  99% in 4.9 ms /  max 6.3 ms - Mobile_Detect partial - real - one per script - opcache off run for 6.2 sec (2506 calls)
per call =  avg 2.3 ms /  min 1.0 ms /  50% in 2.3 ms /  95% in 3.1 ms /  99% in 3.6 ms /  max 4.5 ms - Mobile_Detect partial - fake - one per script - opcache off run for 5.9 sec (2506 calls)
per call =  avg 1.8 ms /  min 0.0 ms /  50% in 1.6 ms /  95% in 3.1 ms /  99% in 4.8 ms / max 36.0 ms - Mobile_Detect partial - real - one per script - opcache on run for 4.5 sec (2506 calls)
per call =  avg 1.7 ms /  min 0.2 ms /  50% in 1.6 ms /  95% in 2.4 ms /  99% in 2.7 ms /  max 3.4 ms - Mobile_Detect partial - fake - one per script - opcache on run for 4.1 sec (2506 calls)

### one per script
name | version | ua list | opcache | total (sec) | calls | avg (ms) | min (ms) | 50% (ms) | 95% (ms) | 99% (ms) | max (ms)
:--- | :--- | :---: | :---: | ---: | ---: | ---: | ---: | ---: | ---: | ---: | ---:
Mobile_Detect | partial | real | off | 6.0 | 2506 | 2.4 | 0.3 | 2.3 | 3.6 | 4.7 | 5.9
Mobile_Detect | partial | real | on | 4.2 | 2506 | 1.7 | 0.0 | 1.6 | 3.0 | 4.1 | 7.6
Mobile_Detect | full | real | off | 16.3 | 2506 | 6.5 | 0.8 | 6.6 | 9.3 | 12.6 | 16.9
Mobile_Detect | full | real | on | 14.2 | 2506 | 5.7 | 0.5 | 5.8 | 8.5 | 12.0 | 14.4
ua-parser | original | real | off | 3.4 | 2506 | 1.3 | 0.1 | 1.3 | 2.0 | 2.3 | 11.9
ua-parser | original | real | on | 2.6 | 2506 | 1.0 | 0.0 | 1.0 | 1.7 | 2.0 | 2.5
ua-parser | revised | real | off | 3.4 | 2506 | 1.4 | 0.2 | 1.3 | 2.0 | 2.4 | 3.1
ua-parser | revised | real | on | 1.6 | 2506 | 0.6 | 0.0 | 0.6 | 1.1 | 1.5 | 2.2
browscap | lite | real | off | 9.6 | 2506 | 3.8 | 0.1 | 3.7 | 7.0 | 9.0 | 27.9
browscap | lite | fake | off | 3.0 | 2506 | 1.2 | 0.1 | 1.2 | 1.8 | 2.0 | 2.6
browscap | lite | real | on | 9.2 | 2506 | 3.7 | 0.2 | 3.6 | 6.8 | 8.2 | 14.2
browscap | lite | fake | on | 3.0 | 2506 | 1.2 | 0.3 | 1.2 | 1.8 | 2.0 | 3.4
browscap | standard | real | off | 58.9 | 2506 | 23.5 | 2.9 | 23.7 | 28.0 | 30.3 | 37.7
browscap | standard | real | on | 58.5 | 2506 | 23.3 | 2.7 | 23.5 | 28.1 | 29.5 | 36.8
browscap | full | real | off | 57.8 | 2506 | 23.1 | 2.8 | 23.2 | 27.8 | 29.3 | 35.8
browscap | full | real | on | 58.5 | 2506 | 23.4 | 2.7 | 23.4 | 28.4 | 30.6 | 35.2
phpbrowscap original | standard | real | off | 57.1 | 2506 | 22.8 | 14.8 | 18.9 | 40.5 | 44.1 | 251.5
phpbrowscap original | standard | fake | off | 95.5 | 2506 | 38.1 | 35.7 | 38.0 | 39.9 | 41.4 | 46.0
phpbrowscap original | standard | real | on | 22.3 | 2506 | 8.9 | 2.1 | 5.1 | 24.7 | 28.7 | 262.1
phpbrowscap original | standard | fake | on | 60.8 | 2506 | 24.2 | 22.0 | 24.1 | 25.7 | 26.7 | 30.1
phpbrowscap original | full | real | off | 62.2 | 2506 | 24.8 | 17.4 | 20.9 | 41.4 | 46.2 | 296.2
phpbrowscap original | full | fake | off | 102.2 | 2506 | 40.8 | 37.6 | 40.6 | 43.3 | 45.0 | 55.9
phpbrowscap original | full | real | on | 24.1 | 2506 | 9.6 | 1.9 | 5.6 | 26.6 | 30.6 | 293.2
phpbrowscap original | full | fake | on | 66.2 | 2506 | 26.4 | 23.1 | 26.2 | 28.7 | 30.2 | 33.5
phpbrowscap mark2 | standard | real | off | 17.8 | 2506 | 7.1 | 5.1 | 6.8 | 8.8 | 11.6 | 278.3
phpbrowscap mark2 | standard | fake | off | 19.4 | 2506 | 7.7 | 6.2 | 7.7 | 8.4 | 8.8 | 11.0
phpbrowscap mark2 | standard | real | on | 4.1 | 2506 | 1.6 | 0.0 | 1.2 | 3.5 | 5.7 | 281.2
phpbrowscap mark2 | standard | fake | on | 5.9 | 2506 | 2.4 | 1.0 | 2.2 | 3.1 | 3.5 | 23.7
phpbrowscap mark2 | full | real | off | 19.3 | 2506 | 7.7 | 5.5 | 7.4 | 9.7 | 11.8 | 305.4
phpbrowscap mark2 | full | fake | off | 21.3 | 2506 | 8.5 | 6.7 | 8.5 | 9.4 | 9.9 | 37.5
phpbrowscap mark2 | full | real | on | 4.2 | 2506 | 1.7 | 0.0 | 1.2 | 3.6 | 5.8 | 312.0
phpbrowscap mark2 | full | fake | on | 6.0 | 2506 | 2.4 | 1.0 | 2.3 | 3.2 | 3.7 | 24.0

### bulk processing, opcache off
name | version | ua list | total (sec) | calls | avg (ms) | min (ms) | 50% (ms) | 95% (ms) | 99% (ms) | max (ms)
:--- | :--- |:---: | ---: | ---: | ---: | ---: | ---: | ---: | ---: | ---:
Mobile_Detect | partial | real - | 4.1 | 2506 | 1.6 | 0.0 | 1.6 | 2.9 | 3.8 | 5.1
Mobile_Detect | full | real - | 14.1 | 2506 | 5.6 | 0.4 | 5.8 | 8.5 | 11.9 | 15.0
ua-parser | original | real - | 1.3 | 2506 | 0.5 | 0.0 | 0.5 | 1.0 | 1.4 | 2.8
ua-parser | revised | real - | 1.3 | 2506 | 0.5 | 0.0 | 0.5 | 1.0 | 1.3 | 2.1
browscap | lite | real - | 9.1 | 2506 | 3.6 | 0.2 | 3.5 | 6.7 | 7.8 | 12.5
browscap | lite | fake - | 2.8 | 2506 | 1.1 | 0.1 | 1.0 | 1.7 | 2.0 | 3.4
browscap | standard | real - | 112.9 | 2506 | 45.1 | 5.4 | 45.3 | 50.0 | 52.1 | 58.5
browscap | full | real - | 108.6 | 2506 | 43.3 | 5.1 | 43.6 | 48.1 | 50.4 | 60.9
phpbrowscap original | standard | real - | 24.1 | 2506 | 9.6 | 0.0 | 1.8 | 42.7 | 47.0 | 269.2
phpbrowscap original | standard | fake - | 107.9 | 2506 | 43.1 | 39.9 | 42.8 | 45.5 | 47.5 | 53.3
phpbrowscap original | full | real - | 24.2 | 2506 | 9.7 | 0.0 | 1.8 | 43.3 | 47.4 | 285.2
phpbrowscap original | full | fake - | 109.4 | 2506 | 43.7 | 39.7 | 43.3 | 47.5 | 50.7 | 78.1
phpbrowscap mark2 | standard | real - | 2.0 | 2506 | 0.8 | 0.0 | 0.4 | 2.3 | 4.2 | 307.4
phpbrowscap mark2 | standard | fake - | 3.7 | 2506 | 1.5 | 0.2 | 1.4 | 2.1 | 2.4 | 3.2
phpbrowscap mark2 | full | real - | 2.1 | 2506 | 0.8 | 0.0 | 0.4 | 2.4 | 4.4 | 328.8
phpbrowscap mark2 | full | fake - | 3.7 | 2506 | 1.5 | 0.5 | 1.4 | 2.1 | 2.4 | 3.3
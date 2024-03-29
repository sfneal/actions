# Changelog

All notable changes to `actions` will be documented in this file

## 0.1.0 - 2020-08-12
- initial release


## 0.1.1 - 2020-08-13
- renamed package from laravel-actions to actions


## 0.1.2 - 2020-08-13
- remove support for PHP 7.1 & below


## 0.1.3 - 2020-08-20
- add AbstractService class


## 0.2.0 - 2020-10-05
- add support for php 7.0 & 7.1


## 0.2.1 - 2020-10-06
- add support for php 5.3-5.6


## 0.3.0 - 2020-12-04
- add support for php 8.0


## 0.4.0 - 2020-12-09
- cut support for php5.5 & lower
- fix min phpunit version to 5.7.27 to avoid issues with php8.


## 0.4.1 - 2021-01-20
- improved test suite by adding mock classes


## 1.0.0 - 2021-01-20
- initial production release
- optimize Travis CI test time by fixing issues with composer caching


## 1.1.0 - 2021-03-30
- make `StaticExecutor` interface to implement a static `execute()` method in `AbstractActionStatic`
- optimize test suite assertions & Mock actions
- add code coverage uploading to Travis CI config


## 2.0.0 - 2021-03-30
- refactor `Action`, `ActionStatic` & `Service` to not use 'Abstract' prefix


## 2.0.1 - 2024-03-29 (unreleased)
- add support for PHP 8.2 & 8.3

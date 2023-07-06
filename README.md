# oss-inazuma



## Installation
To initialize your project and install everything you need in your directory, run the following commands:

Initialize the project:

composer init
Install PHPStan for development:

composer require --dev phpstan/phpstan
Install Symfony HTTP Client:

composer require symfony/http-client
Install Symfony DomCrawler:

composer require symfony/dom-crawler
Install Symfony CSS Selector:

composer require symfony/css-selector
Install PHPUnit for development:

composer require --dev phpunit/phpunit
To launch your application, run the following command:

php build/index.php
To run the tests, use the following command:

composer NomDuTest
Note: Replace "NomDuTest" with the actual name of the test you want to run.

## Local Development 

```bash
composer install
```

```bash
php vendor/bin/phpstan analyze src --level=max
```

```bash
php vendor/bin/phpunit tests
```

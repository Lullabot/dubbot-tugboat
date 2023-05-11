DubBot Drupal module Tugboat environment
===

| [![build status](https://github.com/lullabot/dubbot-tugboat/actions/workflows/ci.yml/badge.svg)](https://github.com/lullabot/dubbot-tugboat/actions/workflows/ci.yml) |
|-----------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| [Online demo by Tugboat](https://main-mxoyu688ldpvli565yfnqliwqlmxpwt2.tugboatqa.com/)                                                                                |


Setup
====


Clone this repository:

```
git clone git@github.com:Lullabot/dubbot-tugboat.git
```
If you are planning to use ddev, now it's a good moment for ```ddev start```.

You can run ```ddev exec ./install.sh```

For updating your env to the latest:

```
ddev composer update drupal/dubbot
```

You might need to run ```ddev exec ./install.sh``` again, as we are not providing
any upgrade paths yet.

Set the DubBot embed key
=====
Visit `/admin/config/system/dubbot` and enter the DubBot embed key.

For contributing:
====

Go to web/modules/contrib/dashboard and ensure to set the origin:

```
git remote set-url origin git@git.drupal.org:project/dubbot.git
```

Git checkout 1.0.x

```
git co 1.0.x
```

Running DubBot module tests
====

Running all tests:

```
ddev exec phpunit --testsuite all
```

Checking DubBot module coding standards
====

Checking module files:

```
ddev exec phpcs --standard=web/core/phpcs.xml.dist web/modules/contrib/dubbot
```

DubBot Drupal module Tugboat environment
==

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
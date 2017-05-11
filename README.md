# BDD PHP Live coding

## Slides

The related slides for this live coding session can be found [at this link](http://slides.com/ekkinox/bdd-with-php).

## Behavior Driven Development

This implementation was made in BDD approach, using together:
- [Behat](http://behat.org)
- [PHPSpec](http://www.phpspec.net)
- [PHPSpec code coverage](https://github.com/leanphp/phpspec-code-coverage)
- [PHPUnit](https://phpunit.de)

## Installation

Composer install dependencies
```
$ composer install
```

## Run tests

**Behat** test suites (configuration in behat.yml)
```
$ vendor/bin/behat
```

**PHPSpec** tests (configuration in phpspec.yml)
```
$ vendor/bin/phpspec run
```

## Tests coverage

PHPSpec tests coverage are generated under **coverage/** folder.
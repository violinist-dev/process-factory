# process-factory
[![Test](https://github.com/violinist-dev/process-factory/actions/workflows/test.yml/badge.svg)](https://github.com/violinist-dev/process-factory/actions/workflows/test.yml)
[![Packagist](https://img.shields.io/packagist/v/violinist-dev/process-factory.svg?maxAge=3600)](https://packagist.org/packages/violinist-dev/process-factory)
[![Packagist](https://img.shields.io/packagist/dt/violinist-dev/process-factory.svg?maxAge=3600)](https://packagist.org/packages/violinist-dev/process-factory)

An interface for creating process factories.

One might need this for interoperability between libraries that all have process factories. Similar to what you need the `psr/log` LoggerInterface for.

Process in this context would mean an instance of `symfony/process`.

## Installation

```
composer require violinist-dev/process-factory
```

## Usage

Well, just expect an interface, or implement it yourself. The interface is fairly simple, and [can bee seen here](https://github.com/violinist-dev/process-factory/blob/master/src/ProcessFactoryInterface.php). 

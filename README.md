# process-factory
[![Build Status](https://travis-ci.org/violinist-dev/process-factory.svg?branch=master)](https://travis-ci.org/violinist-dev/process-factory)

An interface for creating process factories.

One might need this for interoperability between libraries that all have process factories. Similar to what you need the `psr/log` LoggerInterface for.

Process in this context would mean an instance of `symfony/process`.

## Installation

```
composer require violinist-dev/process-factory
```

## Usage

Well, just expect an interface, or implement it yourself. The interface is fairly simple, and [can bee seen here](https://github.com/violinist-dev/process-factory/blob/master/src/ProcessFactoryInterface.php). 

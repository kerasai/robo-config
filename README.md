[![CircleCI](https://circleci.com/gh/kerasai/robo-config.svg?style=svg)](https://circleci.com/gh/kerasai/robo-config)

# Robo Configuration Utility

## Installation

> composer require kerasai/robo-config

## Usage

From within your `Robofile.php` or other Robo-aware code:

```php
<?php

class RoboFile {

  use Kerasai\Robo\Config\ConfigHelperTrait

  // Get a config value.
  $this->getConfigVal('my.config.value', 'default_value');

  // Get multiple config values.
  $config = [
    'my.config.value' => 'default_value',
    'my.config.value2' => 'default_value2',
    'my.config.value3' => 'default_value3',
  ];
  $this->getConfigVals('my.config.value', 'default_value');

  // Require a config value, throws Exception if not set.
  $this->requireConfigVal('my.config.value');

}
``` 
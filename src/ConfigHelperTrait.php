<?php

namespace Kerasai\Robo\Config;

use Robo\Robo;

/**
 * Trait ConfigHelperTrait.
 */
trait ConfigHelperTrait {

  /**
   * Gets a config value.
   *
   * @param string $name
   *   Config value name.
   * @param mixed $default
   *   The default configuration value in the case that no value exists.
   *
   * @return mixed
   *   The configuration value.
   */
  protected function getConfigVal($name, $default = NULL) {
    return Robo::Config()->get($name, $default);
  }

  /**
   * Require a config value.
   *
   * @param string $name
   *   Config value name.
   *
   * @return mixed
   *   The config value.
   *
   * @throws \InvalidArgumentException
   *   When the configuration does not exist.
   */
  protected function requireConfigVal($name) {
    $val = $this->getConfigVal($name);
    if ($val === NULL) {
      throw new \InvalidArgumentException(sprintf('Configuration "%s" not found.', $name));
    }
    return $val;
  }

  /**
   * Gets multiple configuration values.
   *
   * @param array $config
   *   Config to be loaded, keyed by config name, values are defaults.
   *
   * @return array
   *   The config values.
   */
  protected function getConfigVals(array $config) {
    return array_map(function ($item, $key) {
      return $this->getConfigVal($key, $item);
    }, $config);
  }

}

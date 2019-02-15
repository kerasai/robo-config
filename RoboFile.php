<?php

/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see http://robo.li/
 */
class RoboFile extends \Robo\Tasks {

  /**
   * RoboFile constructor.
   */
  public function __construct() {
    $this->stopOnFail();
  }

  /**
   * Run tests.
   */
  public function test() {
    $this->testPhpcs();
    $this->testPhpunit();
  }

  /**
   * PHPCS code style checks.
   */
  public function testPhpcs() {
    $this->taskExecStack()
      ->exec('vendor/bin/phpcs --"standard=vendor/drupal/coder/coder_sniffer/Drupal" src')
      ->run();
  }

  /**
   * PHPUnit tests.
   */
  public function testPhpunit() {
    $this->taskPhpUnit()->run();
  }

}

<?php
namespace Helper;
use Codeception\Module\WebDriver;
// here you can define custom actions
// all public methods declared in helper class will be available in $I

class Acceptance extends \Codeception\Module
{
  public function countElements($locator)
  {
      /** @var WebDriver $webDriver */
      $webDriver = $this->getModule('WebDriver');
      $els = $webDriver->_findElements($locator);
      return sizeof($els);
  }
}

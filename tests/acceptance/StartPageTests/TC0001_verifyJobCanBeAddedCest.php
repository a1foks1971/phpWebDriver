<?php

use Steps\Acceptance\AuthSteps;
use Steps\Acceptance\HeaderSteps;
use Tests\Acceptance\BaseTest\BaseCest;
require_once codecept_root_dir()."tests/acceptance/BaseTest/BaseCest.php";

class TC0001_verifyJobCanBeAddedCest extends BaseCest
{
  protected $authStep;
  public function __construct()
  {
    parent::__construct();
    $this->authStep = new AuthSteps();
  }
  public function _before(AcceptanceTester $I)
  {
    parent::_before($I);
  }


  // tests
  public function verifyJobCanBeAdded(AcceptanceTester $I)
  {
      $this->authStep->verifyIamOnPage($I);
  }
}

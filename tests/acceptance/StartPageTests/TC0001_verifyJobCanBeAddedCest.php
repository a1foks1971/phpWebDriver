<?php

use Steps\Acceptance\AuthSteps;
use Steps\Acceptance\HeaderSteps;
use Steps\Acceptance\LoginSteps;
use Tests\Acceptance\BaseTest\BaseCest;
require_once codecept_root_dir()."tests/acceptance/BaseTest/BaseCest.php";

class TC0001_verifyJobCanBeAddedCest extends BaseCest
{
  protected $authStep;
  protected $loginStep;
  public function __construct()
  {
    parent::__construct();
    $this->authStep = new AuthSteps();
    $this->loginStep = new LoginSteps();
  }
  public function _before(AcceptanceTester $I)
  {
    parent::_before($I);
  }


  // tests
  public function verifyJobCanBeAdded(AcceptanceTester $I)
  {
      $this->authStep->verifyIamOnPage($I);
      $this->authStep->loginWithTestmo($I);
      $this->loginStep->loginWithTestmo($I, 'candidate_LA');
  }
}

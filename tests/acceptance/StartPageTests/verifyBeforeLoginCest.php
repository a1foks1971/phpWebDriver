<?php

use Steps\Acceptance\HeaderSteps;
use Tests\Acceptance\BaseTest\BaseCest;
require_once codecept_root_dir()."tests/acceptance/BaseTest/BaseCest.php";

class verifyBeforeLoginCest extends BaseCest
{
  protected $headerStep;
  public function __construct()
  {
    parent::__construct();
    $this->headerStep = new HeaderSteps();
  }
  public function _before(AcceptanceTester $I)
  {
    parent::_before($I);
  }


  // tests
  public function verifyUI(AcceptanceTester $I)
  {
      $I->see("6pm");
  }
  public function ensureIcanOpenLoginPage(AcceptanceTester $I)
  {
      $this->headerStep->verifyIcon_MyAccount($I);
  }
}

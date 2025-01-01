<?php

use Tests\Acceptance\BaseTest\BaseCest;
require_once codecept_root_dir()."tests/acceptance/BaseTest/BaseCest.php";

class verifyBeforeLoginCest extends BaseCest
{
    public function _before(AcceptanceTester $I)
    {
      parent::_before($I);
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->see("6pm");
    }
}

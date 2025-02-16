<?php
namespace Steps\Acceptance;

use Page\Acceptance\StartPage;
use Steps\Acceptance\BaseStep\Steps;

class AuthSteps extends Steps
{
    protected $startPg;
    public function __construct()
    {
        $this->startPg = new StartPage();
        $this->currPg = $this->startPg;
    }

    public function chooseTestmoLoginMode(\AcceptanceTester $I)
    {
        $this->startPg->ensureIamOnPage($I);
        $this->startPg->clickLoginWithTestmo($I);
    }

}

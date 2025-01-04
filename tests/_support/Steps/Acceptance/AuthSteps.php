<?php
namespace Steps\Acceptance;

use Page\Acceptance\StartPage;
use Steps\Acceptance\BaseStep\Steps;

class AuthSteps extends Steps
{
    protected $authPg;
    public function __construct()
    {
        parent::__construct();
        $this->authPg = new StartPage();
    }

    public function verifyIamOnPage(\AcceptanceTester $I)
    {
        $this->authPg->ensureIamOnPage($I);
    }

    public function loginWithTestmo(\AcceptanceTester $I)
    {
        $this->authPg->clickLoginWithTestmo($I);
    }

}

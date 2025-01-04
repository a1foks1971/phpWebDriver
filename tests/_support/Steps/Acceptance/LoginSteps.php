<?php
namespace Steps\Acceptance;

use Page\Acceptance\Login;
use Steps\Acceptance\BaseStep\Steps;
use Utilits\Utilits;

class LoginSteps extends Steps
{
    protected $loginPg;
    public function __construct()
    {
        parent::__construct();
        $this->loginPg = new Login();
    }

    public function verifyIamOnPage(\AcceptanceTester $I)
    {
        $this->loginPg->ensureIamOnPage($I);
    }

    public function loginWithTestmo(\AcceptanceTester $I, $userName)
    {
      $creds = Utilits::getTestmoCreds( $userName);
      $this->loginPg->login($I, array("email"=>$creds['email'], "password"=>$creds['password'] ));
    }

}

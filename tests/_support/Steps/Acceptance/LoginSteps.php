<?php
namespace Steps\Acceptance;

use Page\Acceptance\Login;
use Steps\Acceptance\BaseStep\Steps;
use Utilits\Utilits;

class LoginSteps extends Steps
{
  private $login;
  public function __construct()
    {
      $this->login = new Login();
      $this->currPg = $this->login;
    }

    public function loginWithTestmo(\AcceptanceTester $I, $userName)
    {
      $creds = Utilits::getTestmoCreds( $userName);
      $this->login->login($I,
        array(
          "email"=>$creds['email'],
          "password"=>$creds['password']
        )
      );
    }

}

<?php
namespace Page\Acceptance;
use Page\Acceptance\BasePage\ILogin;
use Page\Acceptance\BasePage\Page;
use Utilits\Consts;

class Login extends Page implements ILogin
{
    const EMAIL = 'email';
    const PASSWORD = 'password';
    protected $container = '.page-auth';
    private $email = 'input[placeholder="Email"]';
    private $pswInp = 'input[placeholder="Password"]';
    private $submitBtn = 'button[type="submit"]';

    public function __construct()
    {
        parent::__construct();
    }

    public function login(\AcceptanceTester $I,
    $creds = array(
        self::EMAIL => '',
        self::PASSWORD => ''
        )
    )
    {
        $I->amGoingTo('fill in the email field');
        $I->fillField($this->email, $creds[self::EMAIL]);
        $I->amGoingTo('fill in the password field');
        $I->fillField($this->pswInp, $creds[self::PASSWORD]);
        $I->wait(Consts::WAIT_SEC);
        $I->amGoingTo('click on the submit button');
        $I->click($this->submitBtn);
    }

}

<?php
namespace Page\Acceptance;
use Page\Acceptance\BasePage\ILogin;
use Page\Acceptance\BasePage\Page;

class Login extends Page implements ILogin
{
    protected $container = '.page-auth';
    private $email = 'input[placeholder="Email"]';
    private $pswInp = 'input[placeholder="Password"]';
    private $submitBtn = 'button[type="submit"]';

    public function __construct()
    {
        parent::__construct();
    }

    public function login(\AcceptanceTester $I, $creds = array('email' => '', 'password'=> ''))
    {
        $I->amGoingTo('fill in the email field');
        $I->fillField($this->email, $creds['email']);
        $I->amGoingTo('fill in the password field');
        $I->fillField($this->pswInp, $creds['password']);
        $I->amGoingTo('click on the submit button');
        $I->click($this->submitBtn);
    }

}

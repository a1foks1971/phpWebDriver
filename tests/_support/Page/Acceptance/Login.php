<?php
namespace Page\Acceptance;
use Page\Acceptance\BasePage\ILogin;
use Page\Acceptance\BasePage\Page;

class Login extends Page implements ILogin
{
    private static $css = array(
        'container' => `[name="signIn"]`,
        'email' => 'input#ap_email',
        'pswInp' => 'input#ap_password',
        'submitBtn' => '#signInSubmit'
    );

    public function __construct(\AcceptanceTester $I)
    {
        parent::__construct($I);
    }

    public function login($creds = array('email' => '', 'password'=> ''))
    {
        $this->I->seeElement(self::$css['container']);
        assert($creds['email'] !== '');
        $this->I->fillField(self::$css['email'], $creds['email']);
        assert($creds['password'] !== '');
        $this->I->fillField(self::$css['pswInp'], $creds['password']);
        $this->I->click(self::$css['submitBtn']);
    }

}

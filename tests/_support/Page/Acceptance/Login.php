<?php
namespace Page\Acceptance;
use Page\Acceptance\BasePage\ILogin;
use Page\Acceptance\BasePage\Page;

class Login extends Page implements ILogin
{
    private static $css = array(
        'container' => '[name="signIn"]',
        'email' => 'input#ap_email',
        'pswInp' => 'input#ap_password',
        'submitBtn' => '#signInSubmit'
    );

    public function __construct()
    {
        parent::__construct();
    }

    public function login(\AcceptanceTester $I, $creds = array('email' => '', 'password'=> ''))
    {
        $I->seeElement(self::$css['container']);
        assert($creds['email'] !== '');
        $I->fillField(self::$css['email'], $creds['email']);
        assert($creds['password'] !== '');
        $I->fillField(self::$css['pswInp'], $creds['password']);
        $I->click(self::$css['submitBtn']);
    }

    public function verifyLoginIsOpened(\AcceptanceTester $I, )
    {
        $I->amGoingTo('Verify that the "Login" page is opened');
        $I->seeElement(self::$css['container']);
    }

}

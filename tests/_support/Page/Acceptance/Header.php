<?php
namespace Page\Acceptance;
use Page\Acceptance\BasePage\Page;

class Header extends Page
{
    private static $css = array(
        'submitBtn' => '#signInSubmit'
    );

    private static $xpath = array(
        'container' => '//header[1]',
        'iconMenu'=> array(
          'myAccount'=> '(//a[contains(.,"My Account")])[1]'
        )
    );

    public function __construct()
    {
        parent::__construct();
    }

    public function clickMyAccount(\AcceptanceTester $I)
    {
      $I->amGoingTo("Click on the 'My Account' icon to open the 'Login' page");
      $I->click(self::$xpath['iconMenu']['myAccount']);
    }

}

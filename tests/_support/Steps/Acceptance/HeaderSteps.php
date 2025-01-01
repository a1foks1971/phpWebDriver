<?php
namespace Steps\Acceptance;

use Page\Acceptance\Header;
use Page\Acceptance\Login;
use Steps\Acceptance\BaseStep\Steps;

class HeaderSteps extends Steps
{
    protected $header;
    protected $login;
    public function __construct()
    {
        parent::__construct();
        $this->header = new Header();
        $this->login = new Login();
    }

    public function verifyIcon_MyAccount(\AcceptanceTester $I)
    {
        $this->header->clickMyAccount($I);
        $this->login->verifyLoginIsOpened($I);
    }

}

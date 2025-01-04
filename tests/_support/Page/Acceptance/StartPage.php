<?php
namespace Page\Acceptance;

use Page\Acceptance\BasePage\Page;

class StartPage extends Page
{
  const HTTPS_SJPKNIGHT_TESTMO_AUTH = "https://sjpknight.testmo.net/auth";

  const TESTMO_AUTH = "Testmo Auth";
  protected $container = '.page-auth';

  private $loginTestmoLink = "//div[@class='auth-method-select__text' and contains(., 'Testmo')]";

  public static function getStartPageUrl(): string
  {
    return self::HTTPS_SJPKNIGHT_TESTMO_AUTH;
  }

  public function __construct()
  {
    parent::__construct(
        [
            'url' => self::HTTPS_SJPKNIGHT_TESTMO_AUTH,
            'title' => self::TESTMO_AUTH,
        ]
    );
  }

  public function clickLoginWithTestmo(\AcceptanceTester $I)
  {
      $I->amGoingTo("choose the TestMo login mode");
      $I->click($this->loginTestmoLink);
  }

}

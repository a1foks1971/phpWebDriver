<?php
namespace Page\Acceptance;

use Page\Acceptance\BasePage\Page;

class StartPage extends Page
{
  const WWW_6PM_DOT_COM = "https://www.6pm.com/";
  const SIX_PM = "6pm";

  private static $css = [
    'container' => '[name="signIn"]',
    'email' => 'input#ap_email',
    'pswInp' => 'input#ap_password',
    'submitBtn' => '#signInSubmit',
  ];

  public static function getStartPageUrl(): string
  {
    return self::WWW_6PM_DOT_COM;
  }

  public function __construct()
  {
    parent::__construct(
        [
            'url' => self::WWW_6PM_DOT_COM,
            'title' => self::SIX_PM,
        ]
    );
  }

}

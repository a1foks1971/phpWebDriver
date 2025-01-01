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

    public function __construct(\AcceptanceTester $I)
    {
        parent::__construct(
            $I,
            [
                'url' => self::WWW_6PM_DOT_COM,
                'title' => self::SIX_PM,
            ]
        );
    }

    public function login(array $creds): void
    {
        $this->I->seeElement(self::$css['container']);

        if (empty($creds['email']) || empty($creds['password'])) {
            throw new \InvalidArgumentException('Both email and password are required.');
        }

        $this->I->fillField(self::$css['email'], $creds['email']);
        $this->I->fillField(self::$css['pswInp'], $creds['password']);
        $this->I->click(self::$css['submitBtn']);
    }
}

<?php

/**
 * @group Aegean
 */
class tmpNameCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        // $I->amOnPage("/");
        $I->amOnUrl("https://www.google.com");
        $I->see("Google");
        $I->click('//a[@aria-label="Увійти"]');
        $I->dontSee("Login");
        $I->seeElement("//textarea[1]");
        $I->dontSeeInField("//textarea[1]","kuku");
    }
}

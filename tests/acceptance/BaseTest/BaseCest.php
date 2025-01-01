<?php
namespace Tests\Acceptance\BaseTest;
use AcceptanceTester;
use Page\Acceptance\StartPage;
// require_once codecept_root_dir()."tests/_support/Page/Acceptance/StartPage.php";

abstract class BaseCest
{
  public function _before(AcceptanceTester $I)
  {

    // $I->assertTrue(true, "LOGBegin BaseCest/_before()");
    $I->maximizeWindow();
    $this->openSite($I);
}
  protected function openSite(AcceptanceTester $I, $toUrl = ''){
    if ($toUrl === '') {$toUrl = StartPage::getStartPageUrl();}
    $I->amGoingTo('Open the site');
    $I->amOnUrl($toUrl);
  }

}

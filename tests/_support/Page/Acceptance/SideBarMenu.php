<?php
namespace Page\Acceptance;

use Page\Acceptance\BasePage\Page;

class SideBarMenu extends Page
{
  protected $container = '.sidebar__menu__nav--full';

  private $mnuOption_Job = 'a[data-content="Jobs"]';


  public function __construct()
  {
    parent::__construct(
        [
            'title' => 'SideBar Menu',
        ]
    );
  }

  public function clickOnMenuOption_Job(\AcceptanceTester $I)
  {
      $I->amGoingTo("Click on the 'Job' menu option");
      $I->click($this->mnuOption_Job);
  }

}

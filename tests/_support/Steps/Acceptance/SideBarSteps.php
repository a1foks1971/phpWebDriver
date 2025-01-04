<?php
namespace Steps\Acceptance;

use Page\Acceptance\SideBarMenu;
use Steps\Acceptance\BaseStep\Steps;

class SideBarSteps extends Steps
{
  protected $sideBarMenuPg;
  public function __construct()
    {
      $this->sideBarMenuPg = new SideBarMenu();
      $this->currPg = $this->sideBarMenuPg;
    }

    public function openJobPage(\AcceptanceTester $I)
    {
      $this->sideBarMenuPg->waitForPageLoading($I);
      $this->sideBarMenuPg->clickOnMenuOption_Job($I);
    }

}

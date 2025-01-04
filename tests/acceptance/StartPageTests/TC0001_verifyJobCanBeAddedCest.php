<?php

use Steps\Acceptance\AuthSteps;
use Steps\Acceptance\HeaderSteps;
use Steps\Acceptance\LoginSteps;
use Steps\Acceptance\ProjectListSteps;
use Steps\Acceptance\SideBarSteps;
use Tests\Acceptance\BaseTest\BaseCest;
require_once codecept_root_dir()."tests/acceptance/BaseTest/BaseCest.php";

class TC0001_verifyJobCanBeAddedCest extends BaseCest
{
  protected $auth;
  protected $login;
  protected $projectList;
  protected $sideBarMenu;
  public function __construct()
  {
    parent::__construct();
    $this->auth = new AuthSteps();
    $this->login = new LoginSteps();
    $this->projectList = new ProjectListSteps();
    $this->sideBarMenu = new SideBarSteps();
  }
  public function _before(AcceptanceTester $I)
  {
    parent::_before($I);
  }


  // tests
  public function verifyJobCanBeAdded(AcceptanceTester $I)
  {
      $this->auth->verifyIamOnPage($I);
      $this->auth->loginWithTestmo($I);
      $this->login->loginWithTestmo($I, 'candidate_LA');
      $this->projectList->chooseProjets($I, 'TestProject_1');
      $this->sideBarMenu->openJobPage($I);
      $I->wait(30);
  }
}

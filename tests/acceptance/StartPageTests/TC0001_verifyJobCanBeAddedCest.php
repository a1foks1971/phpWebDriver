<?php

use Steps\Acceptance\AddJobSteps;
use Steps\Acceptance\AuthSteps;
use Steps\Acceptance\JobsSteps;
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
  protected $jobs;
  protected $addJobDialog
  ;
  public function __construct()
  {
    parent::__construct();
    $this->auth = new AuthSteps();
    $this->login = new LoginSteps();
    $this->projectList = new ProjectListSteps();
    $this->sideBarMenu = new SideBarSteps();
    $this->jobs = new JobsSteps();
    $this->addJobDialog = new AddJobSteps();
  }
  public function _before(AcceptanceTester $I)
  {
    parent::_before($I);
  }


  // tests
  public function verifyJobCanBeAdded(AcceptanceTester $I)
  {
      $this->auth->chooseTestmoLoginMode($I);
      $this->login->loginWithTestmo($I, 'candidate_LA');
      $this->projectList->openProjet($I, 'TestProject_1');
      $this->sideBarMenu->openJobPage($I);
      $this->jobs->openAddJobDialog($I);
      $this->addJobDialog->addJob($I);
      $I->wait(30);
  }
}

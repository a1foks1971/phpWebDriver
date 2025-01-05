<?php

use Steps\Acceptance\AddJobSteps;
use Steps\Acceptance\AuthSteps;
use Steps\Acceptance\JobsSteps;
use Steps\Acceptance\LoginSteps;
use Steps\Acceptance\ProjectListSteps;
use Steps\Acceptance\SideBarSteps;
use Tests\Acceptance\BaseTest\BaseCest;
require_once codecept_root_dir()."tests/acceptance/BaseTest/BaseCest.php";

class verifyJobsBase extends BaseCest
{
  const CANDIDATE = 'candidate_name';
  const TEST_PROJECT_ID = 'test_project_id';
  const ADVANCED_USER_1 = 'candidate_LA';
  const TEST_PRJ_1 = 'TestProject_1';
  protected $auth;
  protected $login;
  protected $projectList;
  protected $sideBarMenu;
  protected $jobs;
  protected $addJobDialog;

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

  protected function goToAddJobDialog(AcceptanceTester $I,
    $arrayParam = array(
      self::CANDIDATE => self::ADVANCED_USER_1,
      self::TEST_PROJECT_ID => self::TEST_PRJ_1,
    ))
  {
      $this->auth->chooseTestmoLoginMode($I);
      $this->login->loginWithTestmo($I, $arrayParam[self::CANDIDATE]);
      $this->projectList->openProject($I, $arrayParam[self::TEST_PROJECT_ID]);
      $this->sideBarMenu->openJobPage($I);
      $this->jobs->openAddJobDialog($I);
  }

}

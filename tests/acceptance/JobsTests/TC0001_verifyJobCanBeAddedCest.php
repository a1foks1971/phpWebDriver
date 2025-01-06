<?php

use Page\Acceptance\AddJobDialog;

require_once codecept_root_dir()."tests/acceptance/JobsTests/JobsTestsBase/verifyJobsBase.php";

class TC0001_verifyJobCanBeAddedCest extends verifyJobsBase
{
  public function _before(AcceptanceTester $I)
  {
    parent::_before($I);
    $this->auth->chooseTestmoLoginMode($I);
    $this->login->loginWithTestmo($I, parent::ADVANCED_USER_1);
    $this->projectList->openProject($I, parent::TEST_PRJ_1);
    $this->sideBarMenu->openJobPage($I);
    $this->jobs->openAddJobDialog($I);

  }

  public function verifyGithubJobCanBeAdded(AcceptanceTester $I)
  {
      $this->addJobDialog->addJob($I, AddJobDialog::GIT_HUB);
      $this->jobs->verifyTheJobWasAddedToQueue($I, AddJobDialog::GIT_HUB);
  }

  public function verifyGitlabJobCanBeAdded(AcceptanceTester $I)
  {
      $this->addJobDialog->addJob($I, AddJobDialog::GIT_LAB);
      $this->jobs->verifyTheJobWasAddedToQueue($I, AddJobDialog::GIT_LAB);
  }
}

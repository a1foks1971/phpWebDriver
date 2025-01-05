<?php

use Page\Acceptance\AddJobDialog;

require_once codecept_root_dir()."tests/acceptance/JobsTests/JobsTestsBase/verifyJobsBase.php";

class TC0001_verifyJobCanBeAddedCest extends verifyJobsBase
{
  public function _before(AcceptanceTester $I)
  {
    parent::_before($I);
    $this->goToAddJobDialog($I, array(
      parent::CANDIDATE => parent::ADVANCED_USER_1,
      parent::TEST_PROJECT_ID => parent::TEST_PRJ_1,
    ));
  }

  public function verifyGithubJobCanBeAdded(AcceptanceTester $I)
  {
      $this->addJobDialog->addJob($I, AddJobDialog::GIT_HUB_TARGET);
      $I->wait(10);
  }

  public function verifyGitlabJobCanBeAdded(AcceptanceTester $I)
  {
      $this->addJobDialog->addJob($I, AddJobDialog::GIT_LAB_TARGET);
      $I->wait(10);
  }
}

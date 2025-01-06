<?php
namespace Steps\Acceptance;

use Page\Acceptance\AddJobDialog;
use Page\Acceptance\Jobs;
use Steps\Acceptance\BaseStep\Steps;

class JobsSteps extends Steps
{
  protected $jobsPg;
  protected $addJobDialogPg;
  public function __construct()
    {
      $this->jobsPg = new Jobs();
      $this->currPg = $this->jobsPg;
      $this->addJobDialogPg = new AddJobDialog();
    }

    public function openAddJobDialog(\AcceptanceTester $I)
    {
      $this->jobsPg->waitForPageLoading($I);
      //todo: maybe it is usefull to get the currect queue state
      $this->jobsPg->clickOnAddAutomationJobBtn($I);
    }

    public function verifyTheJobWasAddedToQueue(\AcceptanceTester $I, $jobType)
    {
      $this->jobsPg->waitForPageLoading($I);
      $jobProperty = $this->addJobDialogPg->getJobProperty_Execution($jobType);
      $this->jobsPg->verifyQueueTableContainsText($I, $jobProperty);
      $jobProperty = $this->addJobDialogPg->getJobProperty_Connection($jobType);
      $this->jobsPg->verifyQueueTableContainsText($I, $jobProperty);
    }

}

<?php
namespace Steps\Acceptance;

use Page\Acceptance\Jobs;
use Steps\Acceptance\BaseStep\Steps;

class JobsSteps extends Steps
{
  protected $jobsPg;
  public function __construct()
    {
      $this->jobsPg = new Jobs();
      $this->currPg = $this->jobsPg;
    }

    public function addAutomationJob(\AcceptanceTester $I)
    {
      $this->jobsPg->waitForPageLoading($I);
      $this->jobsPg->clickOnAddAutomationJobBtn($I);
    }

}

<?php
namespace Steps\Acceptance;

use Page\Acceptance\AddJobDialog;
use Steps\Acceptance\BaseStep\Steps;

class AddJobSteps extends Steps
{
  protected $addJobDialogPg;
  public function __construct()
    {
      $this->addJobDialogPg = new AddJobDialog();
      $this->currPg = $this->addJobDialogPg;
    }

    public function addJob(\AcceptanceTester $I, $jobType)
    {
      $target = $this->addJobDialogPg->getTarget($jobType);
      $this->addJobDialogPg->setTarget($I, $target);
      $this->addJobDialogPg->clickOnAddJobButton($I);
      $this->addJobDialogPg->waitForPageClosing($I);
    }

}

<?php
namespace Steps\Acceptance;

use Page\Acceptance\ProjectList;
use Steps\Acceptance\BaseStep\Steps;

class ProjectListSteps extends Steps
{
  protected $projectsPg;
  public function __construct()
    {
      $this->projectsPg = new ProjectList();
      $this->currPg = $this->projectsPg;
    }

    public function openProjet(\AcceptanceTester $I, $projectName)
    {
      //todo choosing the $projectName project
      $this->projectsPg->clickOnProjectWithIndex($I, 1);
    }

}

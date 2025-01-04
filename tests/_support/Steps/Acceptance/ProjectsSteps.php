<?php
namespace Steps\Acceptance;

use Page\Acceptance\Projects;
use Steps\Acceptance\BaseStep\Steps;

class ProjectsSteps extends Steps
{
  protected $projectsPg;
  public function __construct()
    {
      $this->projectsPg = new Projects();
      $this->currPg = $this->projectsPg;
    }

    public function chooseProjets(\AcceptanceTester $I, $projectName)
    {
        $this->projectsPg->clickOnProjectWithIndex($I, 1);
    }

}

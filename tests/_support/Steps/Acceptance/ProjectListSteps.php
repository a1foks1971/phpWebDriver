<?php
namespace Steps\Acceptance;

use Page\Acceptance\ProjectList;
use Steps\Acceptance\BaseStep\Steps;
use Utilits\Utilits;

class ProjectListSteps extends Steps
{
  protected $projectsPg;
  public function __construct()
    {
      $this->projectsPg = new ProjectList();
      $this->currPg = $this->projectsPg;
    }

    public function openProject(\AcceptanceTester $I, $projectId)
    {
      $prj = Utilits::getTestmoProjects( $projectId);
      $this->projectsPg->clickOnProjectWithName($I, $prj['name']);
    }

}

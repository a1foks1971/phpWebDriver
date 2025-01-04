<?php
namespace Page\Acceptance;

use Page\Acceptance\BasePage\Page;

class Projects extends Page
{

  protected $container = '.page-content';

  private $projectsInTable = 'table[data-target="components--table.table"]>tbody>tr';

  public function __construct()
  {
    parent::__construct(
        [
            'url' => "https://sjpknight.testmo.net",
            'title' => "Projects",
        ]
    );
  }

  private function getCssOfProjWithIndex($index_started_from_1)
  {
    return $this->projectsInTable.":nth-child(".$index_started_from_1.")";
  }

  public function clickOnProjectWithIndex(\AcceptanceTester $I, $index)
  {
      $I->amGoingTo("Click on a project with index = ". $index);
      $I->click($this->getCssOfProjWithIndex($index));
  }

}

<?php
namespace Page\Acceptance;

use Page\Acceptance\BasePage\Page;

class ProjectList extends Page
{

  protected $container = '.page-content';

  private $projectsInTable = 'table[data-target="components--table.table"]>tbody>tr';
  private $projectsInTable_xpath = '//table[@data-target="components--table.table"]/tbody/tr';
  private $prjNameLink_suffix = ' a';
  private $prjNameLink_suffix_xpath = '//a';

  public function __construct()
  {
    parent::__construct(
        [
          parent::URL => "https://sjpknight.testmo.net",
          parent::TITLE => "Projects",
        ]
    );
  }

  private function getCssOfProjWithIndex($index_started_from_1)
  {
    return $this->projectsInTable.":nth-child(".$index_started_from_1.")";
  }

  public function clickOnProjectWithIndex(\AcceptanceTester $I, $index)
  {
      $I->amGoingTo("click on a project with index = ". $index);
      $locator = $this->getCssOfProjWithIndex($index + 1) . $this->prjNameLink_suffix;
      $I->click($locator);
  }

  public function clickOnProjectWithName(\AcceptanceTester $I, $name)
  {
      $I->amGoingTo("click on a project with name = ". $name);
      $locator = $this->projectsInTable_xpath.$this->prjNameLink_suffix_xpath.'[contains(.,"'.$name.'")]';
      $I->click($locator);
  }

}

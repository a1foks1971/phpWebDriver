<?php
namespace Page\Acceptance;

use Page\Acceptance\BasePage\Page;
use Page\Acceptance\PageElements\BaseElements\IDropdown;

class AddJobDialogBase extends Page
{
  protected $container = '.dialog--compact';
  protected $addJobBtn = '[data-target="submitButton"]';
  private $targetDropdown;
  public function __construct(IDropdown $dropdown)
  {
    parent::__construct(
        [
            parent::TITLE => 'Add Job Dialog',
        ]
    );
    $this->targetDropdown = $dropdown;
  }

  public function setTarget(\AcceptanceTester $I, $targetName)
  {
    $this->_setTarget($I, $this->targetDropdown, $targetName);
  }

  private function _setTarget(\AcceptanceTester $I, IDropdown $dropdown, $targetName)
  {
    $I->amGoingTo("select the '".$targetName."' target");
    $dropdown->selectByVisibleText($I, $targetName);
  }
  public function clickOnAddJobButton(\AcceptanceTester $I)
  {
    $I->amGoingTo("click on the 'Add Job' button");
    $I->click($this->addJobBtn);
  }

}

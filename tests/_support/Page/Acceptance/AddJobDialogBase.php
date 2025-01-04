<?php
namespace Page\Acceptance;

use Page\Acceptance\BasePage\Page;
use Page\Acceptance\PageElements\BaseElements\IDropdown;

class AddJobDialogBase extends Page
{
  protected $container = '.dialog--compact';
  private $targetDropdown;
  public function __construct(IDropdown $dropdown)
  {
    parent::__construct(
        [
            'title' => 'Add Job Dialog',
        ]
    );
    $this->targetDropdown = $dropdown;
  }

  public function setTarget(\AcceptanceTester $I, $targetName)
  {
      $I->amGoingTo("Click on the 'Add Job' button");
      $this->_setTarget($I, $this->targetDropdown, $targetName);
  }

  private function _setTarget(\AcceptanceTester $I, IDropdown $dropdown, $targetName)
  {
      $I->amGoingTo("Click on the 'Add Job' button");
      $dropdown->selectByVisibleText($I, $targetName);
  }

}

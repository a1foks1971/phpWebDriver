<?php
namespace Page\Acceptance;

use Page\Acceptance\BasePage\Page;
use Page\Acceptance\PageElements\Dropdown;
use Page\Acceptance\PageElements\BaseElements\IDropdown;

class AddJobDialog extends Page
{
  protected $container = '.dialog--compact';

  private $addJobBtn = 'button[data-target="submitButton"]';

  private $targetDropdown;
  public function __construct()
  {
    parent::__construct(
        [
            'title' => 'Add Job Dialog',
        ]
    );
    $this->targetDropdown = new Dropdown(
      'Target',
      $this->container,
      $arrayParam = array(
      'dropdownContainer' => '.dialog__main__content',
      'dropdownBtn' => '.dropdown',
      'optionsContainer' => '.popup .dropdown__items',
      'options' => '.dropdown__item'
      ));
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

<?php
namespace Page\Acceptance;

use Page\Acceptance\BasePage\Page;

class Jobs extends Page
{
  protected $container = '.page-content';

  private $addAutomationJobBtn = 'button[data-action="click->automation--jobs--index#doAdd"]';


  public function __construct()
  {
    parent::__construct(
        [
          parent::TITLE => 'Jobs',
        ]
    );
  }

  public function clickOnAddAutomationJobBtn(\AcceptanceTester $I)
  {
      $I->amGoingTo("click on the '+ Automation job' button");
      $I->waitForElementClickable($this->addAutomationJobBtn);
      $I->click($this->addAutomationJobBtn);
  }

}

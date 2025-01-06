<?php
namespace Page\Acceptance;

use Page\Acceptance\BasePage\Page;
use Page\Acceptance\PageElements\Table;

class Jobs extends Page
{
  protected $container = '.page-content';

  private $addAutomationJobBtn = 'button[data-action="click->automation--jobs--index#doAdd"]';
  private $emptyQueueLabel = '//h3[contains(.,"Empty automation queue")]';

  protected $queuedJobTable;
  public function __construct()
  {
    parent::__construct(
        [
          parent::TITLE => 'Jobs',
        ]
    );
    $this->queuedJobTable = new Table(
      $title = 'table',
      $container = '[data-fragment="queuedTable"]',
      $arrayParam = array(
      'table' => 'table',
      'row' => 'tbody>tr[data-id]'
      ));
  }

  public function clickOnAddAutomationJobBtn(\AcceptanceTester $I)
  {
      $I->amGoingTo("click on the '+ Automation job' button");
      $I->waitForElementClickable($this->addAutomationJobBtn);
      $I->click($this->addAutomationJobBtn);
  }

  public function verifyQueueTableContainsText(\AcceptanceTester $I, $text){
    $I->amGoingTo("verify that the first row in the queue table contains '".$text."'");
    $this->queuedJobTable->verifyTableRowContainsText($I, 0, $text);
  }


}

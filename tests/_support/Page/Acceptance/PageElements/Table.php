<?php
namespace Page\Acceptance\PageElements;

use Page\Acceptance\PageElements\BaseElements\ITable;
use Page\Acceptance\PageElements\BaseElements\PageElement;
use Utilits\Consts;

class Table extends PageElement implements ITable
{
  protected $table;
  protected $row;

  public function __construct(
    $title = 'table',
    $container = '[data-fragment="queuedTable"]',
    $arrayParam = array(
    'table' => 'table',
    'row' => 'tbody>tr[data-id]',
  ))
  {
    parent::__construct($title, $container);
    if (array_key_exists('table', $arrayParam)) {
      $this->table = $arrayParam['table'];
    }
    if (array_key_exists('row', $arrayParam)) {
      $this->row = $arrayParam['row'];
    }
  }

  public function isTableVisible(\AcceptanceTester $I){
    $arraySize = $I->countElements($this->table .' '. $this->row);
    return $arraySize > 0;
  }

  public function verifyTableRowContainsText(\AcceptanceTester $I, $rowIndexFrom0, $text){
    //[data-fragment="queuedTable"] tbody>tr[data-id]:nth-child(2)
    $headerShift = 1;
    $rowIndexFrom1 = $rowIndexFrom0 + 1;
    $rowCss = $this->container.' '.$this->table.' '.$this->row.':nth-of-type('.($headerShift + $rowIndexFrom1).')';
    $I->waitForText($text, Consts::WAIT_SEC, $rowCss);
  }

}

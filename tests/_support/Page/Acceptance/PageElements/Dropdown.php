<?php
namespace Page\Acceptance\PageElements;

use Page\Acceptance\PageElements\BaseElements\IDropdown;
use Page\Acceptance\PageElements\BaseElements\PageElement;
use Utilits\Consts;

class Dropdown extends PageElement implements IDropdown
{

  protected $dropdownContainer = '.dialog__main__content';
  protected $dropdownBtn = '.dropdown';
  protected $currentTextValue = '.dropdown__item';
  protected $optionsContainer = '.popup .dropdown__items';
  protected $optionsList = '.dropdown__items__row';
  protected $optionText = '.dropdown__item';
  protected $openBtn;

  public function __construct(
    $title,
    $container,
    $arrayParam = array(
    'dropdownContainer' => '.dialog__main__content',
    'dropdownBtn' => '.dropdown',
    'currentTextValue' => '.dropdown__item',
    'optionsContainer' => '.popup .dropdown__items',
    'optionsList' => '.dropdown__items__row',
    'optionText' => '.dropdown__item'
  ))
  {
    parent::__construct($title, $container);
    if (array_key_exists('dropdownContainer', $arrayParam)) {
      $this->dropdownContainer = $arrayParam['dropdownContainer'];
    }
    if (array_key_exists('dropdownBtn', $arrayParam)) {
      $this->dropdownBtn = $arrayParam['dropdownBtn'];
    }
    if (array_key_exists('currentTextValue', $arrayParam)) {
      $this->currentTextValue = $arrayParam['currentTextValue'];
    }
    if (array_key_exists('optionsContainer', $arrayParam)) {
      $this->optionsContainer = $arrayParam['optionsContainer'];
    }
    if (array_key_exists('optionsList', $arrayParam)) {
      $this->optionsList = $arrayParam['optionsList'];
    }
    if (array_key_exists('optionText', $arrayParam)) {
      $this->optionText = $arrayParam['optionText'];
    }
    $this->openBtn = $this->container.' '.$this->dropdownContainer.' '.$this->dropdownBtn;
  }

  public function getAllOptions(\AcceptanceTester $I){
    $I->amGoingTo('grab all the "'.$this->title.'" dropdown options');
    $I->waitForElement($this->optionsContainer);
    $optionItemS = $this->optionsContainer.' '.$this->optionText;
    $optTextArr = $I->grabMultiple($optionItemS);
    return $optTextArr;
  }
  public function selectByVisibleText(\AcceptanceTester $I, $optionName){
    $this->openDropdown($I);
    $I->amGoingTo('select the "'.$optionName.'" option');
    $index_from_0 = $this->getIndexOfOptionWithText($I, $optionName);
    $this->clickOnOptionWithIndex($I, $index_from_0);
    $I->amGoingTo('verify the "'.$optionName.'" option is selected');
    $I->waitForText($optionName, Consts::WAIT_SEC,$this->openBtn);
  }
  public function containsOption(\AcceptanceTester $I, $optionName){
    //todo
  }
  public function getSelectedValue(\AcceptanceTester $I){
    //todo
  }

  public function openDropdown(\AcceptanceTester $I){
    $I->amGoingTo('open the "'.$this->title.'" dropdown');
    $I->waitForElement($this->openBtn);
    $I->click($this->openBtn);
    $I->waitForElementVisible($this->optionsContainer);
  }

  private function getIndexOfOptionWithText(\AcceptanceTester $I, $optionName){
    $optTextArr = $this->getAllOptions($I);
    $index_from_0 = array_search($optionName, $optTextArr);
    return $index_from_0;
  }

  public function clickOnOptionWithIndex(\AcceptanceTester $I, $index_from_0){
    assert($index_from_0 !== false);
    $I->amGoingTo('select the '.$index_from_0.'-th option');
    $index_from_1 = $index_from_0 + 1;
    $optionItem = $this->optionsContainer.' '.$this->optionsList.':nth-of-type('.$index_from_1.') '.$this->optionText;
    $I->waitForElement($optionItem);
    $I->click($optionItem);
  }

}

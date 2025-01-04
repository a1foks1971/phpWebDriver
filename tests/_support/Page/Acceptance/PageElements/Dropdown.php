<?php
namespace Page\Acceptance\PageElements;

use Page\Acceptance\PageElements\BaseElements\IDropdown;
use Page\Acceptance\PageElements\BaseElements\PageElement;


class Dropdown extends PageElement implements IDropdown
{

  protected $dropdownContainer = '.dialog__main__content';
  protected $dropdownBtn = '.dropdown';
  protected $optionsContainer = '.dropdown__items';
  protected $options = '.dropdown__item';

  public function __construct(
    $title,
    $container,
    $arrayParam = array(
    'dropdownContainer' => '.dialog__main__content',
    'dropdownBtn' => '.dropdown',
    'optionsContainer' => '.popup .dropdown__items',
    'options' => '.dropdown__item'
  ))
  {
    parent::__construct($title, $container);
    if (array_key_exists('dropdownContainer', $arrayParam)) {
      $this->dropdownContainer = $arrayParam['dropdownContainer'];
    }
    if (array_key_exists('dropdownBtn', $arrayParam)) {
      $this->dropdownBtn = $arrayParam['dropdownBtn'];
    }
    if (array_key_exists('optionsContainer', $arrayParam)) {
      $this->optionsContainer = $arrayParam['optionsContainer'];
    }
    if (array_key_exists('options', $arrayParam)) {
      $this->options = $arrayParam['options'];
    }
  }

  public function getAllOptions(\AcceptanceTester $I){
    //todo
  }
  public function selectByVisibleText(\AcceptanceTester $I, $optionName){
    $this->openDropdown($I);
    //todo
  }
  public function containsOption(\AcceptanceTester $I, $optionName){
    //todo
  }
  public function getSelectedValue(\AcceptanceTester $I){
    //todo
  }

  public function openDropdown(\AcceptanceTester $I){
    $I->amGoingTo('open the "'.$this->title.'" dropdown');
    $openBtn = $this->container.' '.$this->dropdownContainer.' '.$this->dropdownBtn;
    $I->waitForElement($openBtn);
    $I->click($openBtn);
    $I->waitForElementVisible($this->optionsContainer);
  }
}

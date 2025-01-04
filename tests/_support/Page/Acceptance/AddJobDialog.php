<?php
namespace Page\Acceptance;

use Page\Acceptance\PageElements\Dropdown;

class AddJobDialog extends AddJobDialogBase
{
  public function __construct()
  {
    $dropdown = new Dropdown(
      'Target',
      $this->container,
      $arrayParam = array(
      'dropdownContainer' => '.dialog__main__content',
      'dropdownBtn' => '.dropdown',
      'optionsContainer' => '.popup .dropdown__items',
      'options' => '.dropdown__item'
      ));

      parent::__construct($dropdown);
  }

}

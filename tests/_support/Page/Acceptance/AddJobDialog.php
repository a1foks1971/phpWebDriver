<?php
namespace Page\Acceptance;

use Page\Acceptance\PageElements\Dropdown;
use Utilits\Utilits;

class AddJobDialog extends AddJobDialogBase
{
  const GIT_HUB = "GitHub";
  const GIT_LAB = "GitLab";
  const PROP_CONNECTION = "Connection";
  const PROP_EXECUTION = "Execution";

  private $jobPropJSON = './tests/_data/job_properties.json';
  private $GitHubJobProp;
  private $GitLabJobProp;

  public function __construct()
  {
    $dropdown = new Dropdown(
      'Target',
      $this->container,
      $arrayParam = array(
      'dropdownContainer' => '.dialog__main__content',
      'dropdownBtn' => '.dropdown',
      'currentTextValue' => '.dropdown__item',
      'optionsContainer' => '.popup .dropdown__items',
      'optionsList' => '.dropdown__items__row',
      'optionText' => '.dropdown__item'
    ));

      parent::__construct($dropdown);
      $this->GitHubJobProp = Utilits::getFromJSON($this->jobPropJSON);
  }

  public function getTarget($jobType){
    return $this->GitHubJobProp[$jobType][self::PROP_EXECUTION]
    .' ('
    .$this->GitHubJobProp[$jobType][self::PROP_CONNECTION]
    .')';
  }

  public function getJobProperty_Execution($jobType){
    return $this->GitHubJobProp[$jobType][self::PROP_EXECUTION];
  }

  public function getJobProperty_Connection($jobType){
    return $this->GitHubJobProp[$jobType][self::PROP_EXECUTION];
  }

}

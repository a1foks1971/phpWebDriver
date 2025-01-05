<?php
namespace Page\Acceptance\BasePage;

abstract class  Page
{
    // include url of current page
    protected $URL = '';
    protected $title = '';
    protected $container = 'body';

    const URL = 'url';
    const TITLE = 'title';

    public function __construct(
      $arrayParam = array(
        self::URL => '',
        self::TITLE => ''
      )
    )
    {
      if (array_key_exists(self::URL, $arrayParam)) {
        $this->URL = $arrayParam[self::URL];
      }
      if (array_key_exists(self::TITLE, $arrayParam)) {
        $this->title = $arrayParam[self::TITLE];
      }
    }

    public function getURL()
    {
      return $this->URL;
    }

    public function setUrl($url)
    {
      $this->URL = $url;
      return $this->URL;
    }

    public function getTitle()
    {
      return $this->title;
    }

    public function setTitle($title)
    {
      $this->title = $title;
      return $this->title;
    }

    public function ensureIamOnPage(\AcceptanceTester $I)
    {
        $I->amGoingTo("verify that I am on the '".$this->title."' page");
        $I->seeElement($this->container);
    }

    public function waitForPageLoading(\AcceptanceTester $I){
      $I->amGoingTo("wait for the '".$this->title."' page is loaded");
      $I->waitForElement($this->container);
    }


}

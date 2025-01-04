<?php
namespace Page\Acceptance\BasePage;

abstract class  Page
{
    // include url of current page
    protected $URL = '';
    protected $title = '';
    protected $container = 'body';

    public function __construct(
      $arrayParam = array(
        'url' => '',
        'title' => ''
      )
    )
    {
      if (array_key_exists('url', $arrayParam)) {
        $this->URL = $arrayParam['url'];
      }
      if (array_key_exists('title', $arrayParam)) {
        $this->title = $arrayParam['title'];
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

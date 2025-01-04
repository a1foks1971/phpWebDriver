<?php
namespace Page\Acceptance\PageElements\BaseElements;

abstract class  PageElement
{
    // include url of current page
    protected $title = '';
    protected $container = 'body';

    public function __construct($title, $container){
      $this->title = $title;
      $this->container = $container;
    }

    public function ensureIseeElement(\AcceptanceTester $I)
    {
        $I->amGoingTo("Verify I am on the '".$this->title."' page");
        $I->seeElement($this->container);
    }

}

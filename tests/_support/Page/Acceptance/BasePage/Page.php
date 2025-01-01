<?php
namespace Page\Acceptance\BasePage;

abstract class  Page
{
    // include url of current page
    protected $URL = '';
    protected $title = '';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public function route($param)
    {
        return $this->URL.$param;
    }

    public function __construct(
      $arrayParam = array(
        'url' => '',
        'title' => ''
      )
    )
    {
        $this->URL = $arrayParam['url'];
        $this->title = $arrayParam['title'];
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

}

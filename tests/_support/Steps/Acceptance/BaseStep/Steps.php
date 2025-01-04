<?php
namespace Steps\Acceptance\BaseStep;
use Page\Acceptance\StartPage;

class Steps
{
    protected $I;
    protected $currPg;

    public function __construct()
    {
      $this->currPg = new StartPage();
    }

    public function verifyIamOnPage(\AcceptanceTester $I)
    {
        $this->currPg->ensureIamOnPage($I);
    }

}

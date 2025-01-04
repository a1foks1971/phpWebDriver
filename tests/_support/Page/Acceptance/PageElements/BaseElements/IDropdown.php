<?php
namespace Page\Acceptance\PageElements\BaseElements;

interface IDropdown
{
    public function getAllOptions(\AcceptanceTester $I);
    public function selectByVisibleText(\AcceptanceTester $I, $optionName);
    public function containsOption(\AcceptanceTester $I, $optionName);
    public function getSelectedValue(\AcceptanceTester $I);
}
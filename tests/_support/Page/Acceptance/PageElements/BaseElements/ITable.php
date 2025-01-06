<?php
namespace Page\Acceptance\PageElements\BaseElements;

interface ITable
{
    public function verifyTableRowContainsText(\AcceptanceTester $I, $rowIndexFrom0, $text);
    public function isTableVisible(\AcceptanceTester $I);
}
<?php
$cases = array(
    "TC0001" => "tests/acceptance/JobsTests/TC0001_verifyJobCanBeAddedCest.php",
);

$testCase = $argv[1] ?? null;

if (!$testCase || !isset($cases[$testCase])) {
    echo "";
    exit(1);
}

echo $cases[$testCase];
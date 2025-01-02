CODECEPTION DOCUMENTATION:
https://codeception.com/quickstart

========================================================================================

TO RUN THE TEST LOCALLY
Preconditions:
- php must be installed
- composer must be installed

=== A ===
1. Clone the project and run the command in the folder console: "composer install"
2. Start the selenium server - run the batch file
  ./_webdriver_binaries/startServer.bat
3. Run in console
  - to run all the tests:
  php vendor/bin/codecept run --html --xml
  - to run the "tests/acceptance/StartPageTests/verifyBeforeLoginCest.php" test:
  php vendor/bin/codecept run tests/acceptance/StartPageTests/verifyBeforeLoginCest.php --html --xml
4. There will be reports in ./tests/_output

=== B ===
1. Clone the project and run the command in the folder console: "composer install"
2. To run the "tests/acceptance/StartPageTests/verifyBeforeLoginCest.php" test, run the batch with parameters:
  runTest.bat tests/acceptance/StartPageTests/verifyBeforeLoginCest.php
3. There will be reports in ./tests/_output

========================================================================================

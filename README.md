CODECEPTION DOCUMENTATION:

https://codeception.com/quickstart

====================================================

TO RUN THE TEST LOCALLY

Preconditions:
- php must be installed
- composer must be installed
- ask the customer to send a json file with needed credentials
- paste the got 'testmo_creds.json' file into the "tests/_data/" folder

=== A ===
1. Clone the project and run the command in the folder console: "composer install"
2. Start the selenium server - run the batch file
  ./_webdriver_binaries/startServer.bat
3. Run in console
  - to run all the tests:
  php vendor/bin/codecept run --html --xml
  - to run the "tests/acceptance/JobsTests/TC0001_verifyJobCanBeAddedCest" test:
  php vendor/bin/codecept run tests/acceptance/JobsTests/TC0001_verifyJobCanBeAddedCest --html --xml
4. There will be reports in ./tests/_output

=== B ===
1. Clone the project and run the command in the folder console: "composer install"
2. To run the "tests/acceptance/JobsTests/TC0001_verifyJobCanBeAddedCest" test,
  2.1. Add the test into this array in testIdToPath.php
    (if it has not been added yet):
    $cases = array(
        "TC0001" => "tests/acceptance/JobsTests/TC0001_verifyJobCanBeAddedCest.php",
    );
  2.2. run the batch with the parameter:
  ./runTest.bat TC0001
  (The script starts the selenium server, runs the test and stops the server)
3. There will be reports in ./tests/_output

====================================================

REPORTS

All reports are in ./tests/_output folder
1. file report.html
2. file report.xml (for CI/CD e.g. Jenkins)
3. folders /record_* - like video for failed tests (watch index.html inside the folder)
4. *.png - screenshots for failed tests

====================================================

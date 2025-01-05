@echo off
setlocal

:: Get TestID (like "TC0001")
set TEST_CODE=%1

:: Is the parameter initiated
if "%TEST_CODE%"=="" (
    echo "ERROR: TEST_CODE is empty"
    exit /b 1
)

:: Get the case full name
for /f "delims=" %%A in ('php testIdToPath.php %TEST_CODE%') do set TEST_PATH=%%A

:: Is the name got
if "%TEST_PATH%"=="" (
    echo "ERROR: Can't find the path for %TEST_CODE%!"
    exit /b 1
)

echo "Start selenium server"
cd _webdriver_binaries
start /min "SeleniumStandaloneServer" cmd /c "startServer.bat"

echo "Start delay"
timeout /t 5

echo "Start tests"
cd ..
php vendor/bin/codecept run "%TEST_PATH%" --xml --html

echo "Stop selenium server"
taskkill /FI "WINDOWTITLE EQ SeleniumStandaloneServer" /f /t

exit
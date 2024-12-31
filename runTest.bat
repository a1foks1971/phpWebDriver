echo "Start selenium server"
cd _webdriver_binaries
start /min "SeleniumStandaloneServer" cmd /c "startServer.bat"
echo "Start delay"
timeout /t 5
echo "Start tests"
cd ..
php vendor/bin/codecept run "%1"
echo "Stop selenium server"
taskkill /FI "WINDOWTITLE EQ SeleniumStandaloneServer" /f /t
exit
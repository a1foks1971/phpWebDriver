@echo off

if "%1"=="" (
    echo [ERROR] Email not provided. Usage: createCredsJson.bat email password
    exit /b 1
)

if "%2"=="" (
    echo [ERROR] Password not provided. Usage: createCredsJson.bat email password
    exit /b 1
)

set EMAIL=%1
set PASSWORD=%2

REM Создаем JSON файл
echo { > testmo_creds.json
echo   "candidate_LA": { >> testmo_creds.json
echo     "email": "%EMAIL%", >> testmo_creds.json
echo     "password": "%PASSWORD%" >> testmo_creds.json
echo   } >> testmo_creds.json
echo } >> testmo_creds.json

echo [SUCCESS] JSON file created at testmo_creds.json
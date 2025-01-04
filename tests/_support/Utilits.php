<?php
namespace Utilits;

class Utilits
{

  public static function  getTestmoCreds($username)
  {
    $configFile = './tests/_data/testmo_creds.json';

    // Проверяем, существует ли файл
    if (!file_exists($configFile)) {
        die("Файл конфигурации не найден: $configFile");
    }

    // Чтение файла
    $configJson = file_get_contents($configFile);

    // Декодируем JSON в массив
    $config = json_decode($configJson, true);

    // Проверяем наличие ошибок при декодировании
    if (json_last_error() !== JSON_ERROR_NONE) {
        die("Ошибка при декодировании JSON: " . json_last_error_msg());
    }

    // // Доступ к параметрам
    // $webDriverUsername = $config['webDriver']['username'];
    // $webDriverPassword = $config['webDriver']['password'];
    // $webDriverHost = $config['webDriver']['host'];

    // echo "WebDriver Host: $webDriverHost\n";
    // echo "Username: $webDriverUsername\n";
    return $config[$username];
  }



}
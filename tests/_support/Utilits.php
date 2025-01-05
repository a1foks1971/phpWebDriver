<?php
namespace Utilits;

class Utilits
{

  public static function  getFromJSON($jsonFile)
  {
    if (!file_exists($jsonFile)) {
      die("File is not found: $jsonFile");
    }
    $contentJson = file_get_contents($jsonFile);
    $obj = json_decode($contentJson, true);
    if (json_last_error() !== JSON_ERROR_NONE) {
      die("JSON decoding error: " . json_last_error_msg());
    }
    return $obj;
  }

  public static function  getTestmoCreds($username)
  {
    $configFile = './tests/_data/testmo_creds.json';
    $config = self::getFromJSON($configFile);
    return $config[$username];
  }

  public static function  getTestmoProjects($projectId)
  {
    $configFile = './tests/_data/testmo_projects.json';
    $config = self::getFromJSON($configFile);
    return $config[$projectId];
  }



}
<?php

class DbConnection
{
  protected static $connection;

  // function __create() {
  //
  // }

    static function getConnection() {
      if (self::$connection) {
        return self::$connection;
      }

      try {
          $dsn = 'mysql:host='.$_ENV['MYSQL_HOST'].';dbname='.$_ENV['MYSQL_DATABASE'].';charset=utf8';
          error_log($dsn);
          self::$connection = new PDO(
            //
             $dsn,
             $_ENV['MYSQL_USER'],
             $_ENV['MYSQL_PASSWORD'],
             // - ENV is a global variable
             [
                 PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                 PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                 // Getting a data back as an assoicate array
                 PDO::ATTR_EMULATE_PREPARES   => false
             ]
           );
      } catch (\PDOException $e) {
          throw new \PDOException($e->getMessage(), (int)$e->getCode());
      }
      return self::$connection;
    }
}

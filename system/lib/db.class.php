<?php

class db 
{
  protected static $pdo = null;

  public static function pdo()
  {
    // if static::$pdo was not yet created (ie. connected to the db)
    if(static::$pdo===null) {
      // connect to the db 
      static::$pdo = new PDO(
        'mysql:dbhost='.config::get('db_host').'; dbname='.config::get('db_name').'; charset='.config::get('db_charset'),
        config::get('db_user'),
        config::get('db_pass')
          );
       
     }
     
       return static::$pdo;
      // store the connection into static::$pdo
    //end if
  }

  public static function query($sql)
  {
    $result = static::pdo()->query($sql);
    if($result===false) {
      echo 'error';
      var_dump(static::pdo()->errorInfo());
      die();
    }
    return $result;
  }

  public static function execute($sql, $substitutions = array())
  {
    // get PDO connection odbc_fetch_object
    $pdo = static::pdo();

    //prepare a statement out of SQL
    $statement = $pdo->prepare($sql);


    // we run the query and keep the outcome (true or false)
    $outcome = $statement->execute($substitutions);

    if($outcome===false)
    {
    static::exitWithError();
    }
    return $statement;
  }

  protected function exitWithError()
  {
    echo 'mysql error';
    var_dump(static::pdo()->errorInfo());
    exit();

  }

}
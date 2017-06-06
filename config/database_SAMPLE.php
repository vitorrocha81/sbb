<?php
// used to connect to the database
 
class Database 
{
	private static $dbHost = "db_server";
	private static $dbName = "db_Name";
	private static $dbUsername = "db_userName";
	private static $dbUserPassword = "db_userPassword";


	
	private static $cont  = null;
	
	public function __construct() {
		die('Init function is not allowed');
	}
	
	public static function connect()
	{
	   // One connection through whole application
       if ( null == self::$cont )
       {      
        try 
        {
          self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);  
        }
        catch(PDOException $e) 
        {
          die($e->getMessage());  
        }
       } 
       return self::$cont;
	}
	
	public static function disconnect()
	{
		self::$cont = null;
	}
}
?>
		
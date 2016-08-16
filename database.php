<?php
class Database 
{
	/*$server="localhost";
$database="mastrave_cm";
$dbpass="@ppDT2016.";
$dbuser="mastrave_root";*/
	
	/*private static $dbName = 'traveladmin' ; 
	private static $dbHost = 'localhost' ;
	private static $dbUsername = 'root';
	private static $dbUserPassword = 'toor';*/
	
	private static $dbName = 'mastrave_cm' ; 
	private static $dbHost = 'localhost' ;
	private static $dbUsername = 'mastrave_root';
	private static $dbUserPassword = '@ppDT2016.';

	
	private static $cont  = null;
	
	public function __construct() {
		exit('Init function is not allowed');
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
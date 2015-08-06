<?php
/**
 * Middleware for my application
 * @author      saumya <saumyaray.com>
 * @copyright   2015 Saumya Ray
 * @link        http://www.saumyaray.com
 * @license     http://www.slimframework.com/license
 * @version     1.0.0
 * @package     icraft
 *
 */
namespace icraft;
class DBUtil{

  public function __construct(){
    //echo 'DBUtil:__construct:';
  }
  public static function getConnection(){
    /*
  	// setting for Windows
  	$server = 'localhost'; // this may be an ip address instead
  	$user = 'saumya';
  	$pass = 'saumya123';
  	$database = 'icraft';
    */
    
  	// setting for my MBP
  	$server = 'localhost';
  	$user = 'root';
  	$pass = 'rootPW';
    $database = 'icraft';
  	//$database = 'iCraftDB';
    
  	/*
  	// setting for hostinger.oin
  	$server = 'localhost'; // this may be an ip address instead
  	$user = 'u283400060_alpha';
  	$pass = 'J0Q45jLIr1';
  	$database = 'u283400060_alpha';
  	*/

  	//Connect to DB
  	//$connection = new \mysqli($server, $user, $pass, $database);
    //$connection = new \PDO($server, $user, $pass, $database);
    $connection = \icraft\PDOUtil::getInstance();
  	// return the connection
  	return $connection;
  }
}

?>

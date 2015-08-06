<?php
/**
 * Database access with PDO as a singleton implementation
 * @author      saumya <http://saumya.github.io>
 * @copyright   2015 Saumya Ray
 * @link        http://www.saumyaray.com
 * @license     http://www.slimframework.com/license
 * @version     1.0.0
 * @package     icraft
 *
 */
namespace icraft;
class PDOUtil{
  /*** Declare instance ***/
  private static $instance = NULL;
  /**
  *
  * the constructor is set to private so
  * so nobody can create a new instance using new
  *
  */
  private function __construct() {/*** maybe set the db name here later ***/ }
  /**
  *
  * Return DB instance or create intitial connection
  * @return object (PDO)
  * @access public
  *
  */
  public static function getInstance() {
    if (!self::$instance){
      //
      // setting for Windows
    	$server = 'localhost'; // this may be an ip address instead
    	$user = 'saumya';
    	$pass = 'saumya123';
    	$database = 'icraft';
      //
      self::$instance = new \PDO("mysql:host=$server;dbname=$database", $user, $pass);
      self::$instance-> setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }
    return self::$instance;
  }
  /**
  *
  * Like the constructor, we make __clone private
  * so nobody can clone the instance
  *
  */
  private function __clone(){}
}/*** end of class ***/
/*
try{
    //query the database
    $result = DB::getInstance()->query("SELECT * FROM animals");
    // loop over the results
    foreach($result as $row){
      print $row['animal_type'] .' - '. $row['animal_name'] . '<br />';
    }
}catch(PDOException $e){
    echo $e->getMessage();
}
*/
?>

<?php
/**
 * Middleware for my application
 * @author      saumya <saumyaray.com>
 * @copyright   2015 Saumya Ray
 * @link        http://www.saumyaray.com
 * @license     http://www.slimframework.com/license
 * @version     2.6.1
 * @package     icraft
 *
 */
$testMe = function (\Slim\Route $route){
  $app = \Slim\Slim::getInstance();
  echo 'middleware:authenticate:start <br />';
  var_dump($route);
  echo '<br /> middleware:authenticate:end <br />';
};
$authenticate = function (\Slim\Route $route){
    /*
    if (validateUserKey() === false) {
      $app->halt(401);
    }
    */
    echo "TODO: authenticate <br />";
    $dbUtil = new \icraft\DBUtil();
    $dbConnection = $dbUtil->getConnection();
    var_dump ($dbConnection);
};
function registerUser (\Slim\Slim $slimApp){
  $request = $slimApp->request;
  $response = $slimApp->response();
  $response->headers->set('Content-Type', 'application/json');
  //

  $userData = json_decode($request->getBody());
  $name = $userData->userName;
  $password = $userData->password;
  $email = $userData->email;
  /*
  $dataObj='{"n": "'.$name.'","p":"'.$password.'"}';
  //$response->body(json_encode($request));
  $response->body($dataObj);
  */

  $dbUtil = new \icraft\DBUtil();
  $dbConnection = $dbUtil->getConnection();

  //prepared statements
  # named placeholders
  //$DBH = $dbConnection;
  $STH = $dbConnection->prepare("INSERT INTO users (uName, uPassword, uEmail) value (:n, :p, :e)");

  // assign variables to placeholders
  $STH->bindParam(':n', $uName);
  $STH->bindParam(':p', $uPassword);
  $STH->bindParam(':e',$uEmail);
  // Now start insterting
  $uName = $name;
  $uPassword = $password;
  $uEmail = $email;
  $STH->execute();
  //return response
  $responseObj = "{'status':'SUCCESS','userObj':{'name':$name,'password':$password,'email':$email}}";
  $response->body($responseObj);
  //return true;
};
function loginUser (\Slim\Slim $slimApp){
  //echo "middleware:loginUser";
  $request = $slimApp->request;
  $response = $slimApp->response();
  $response->headers->set('Content-Type', 'application/json');
  //
  $userData = json_decode($request->getBody());
  $name = $userData->userName;
  $password = $userData->password;
  $email = $userData->email;
  //
  $dbUtil = new \icraft\DBUtil();
  $DBH = $dbUtil->getConnection();
  // $sql = "SELECT * FROM `users` WHERE uName=\'saumya\' && uPassword=\'saumyaPW1\'";
  //$STH = $DBH->prepare("SELECT * FROM `users` WHERE uName='$name' && uPassword='$password'");
  $STH = $DBH->query("SELECT * FROM `users` WHERE uName='$name' && uPassword='$password'");
  $STH->setFetchMode(PDO::FETCH_ASSOC);
  //$STH->execute();
  //var_dump($STH);
  $response->body('FAIL');// Default FAIL
  while($row = $STH->fetch()) {
      /*
      echo $row['uName'] . "\n";
      echo $row['uPassword'] . "\n";
      echo $row['uEmail'] . "\n";
      */
      $n = $row['uName'];
      $p = $row['uPassword'];
      $e = $row['uEmail'];
      $responseObj = "{'status':'SUCCESS','userObj':{'name':$n,'password':$p,'email':$e}}";
      $response->body($responseObj);
  }
};


?>

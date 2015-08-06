<?php
require 'Slim/Slim.php';
require_once 'iCraft/middleware.php';
include_once 'icraft/dbUtil.php';
include_once 'icraft/PDOUtil.php';
//load Slim
\Slim\Slim::registerAutoloader();
//initiate the Application
$app = new \Slim\Slim();
//setting global Content-Type
//$app->contentType('application/json');
  //$response['Content-Type'] = 'application/json';

// Routes
$app->get('/',function() use($app){
  $app->render( 'beta_register.php', array('page_title' => "Beta Register",'data'=>'' ) );
  /*
  $response = $app->response();
  //$response['Content-Type'] = 'application/json';
  $response->headers->set('Content-Type', 'application/json');
  $response->status(200);
  $dataObj='{"API": "1.0.0","by":"saumya"}';
  $response->body($dataObj);
  */
});
/*
$app->get('/',$testMe,function() use($app){
  //echo "Hello World! <br />";
  //var_dump ($app);
  $response = $app->response();
  //$response['Content-Type'] = 'application/json';
  $response->headers->set('Content-Type', 'application/json');
  $response->status(200);
  $dataObj='{"API": "1.0.0","by":"saumya"}';
  $response->body($dataObj);
});
*/
$app->get('/testDB',$authenticate,function() use($app){
  echo '<br /> get:testDB:SUCCESS';
});
$app->post('/v1.0/user/register',function() use($app){
  registerUser($app);
});
$app->get('/v1.0/user/login',function() use($app){
  //echo "TODO: login";
  $response = $app->response();
  $response->status(200);
  //$response['Content-Type'] = 'application/json';
  //$response->header('Content-Type', 'application/json');
  $response->headers->set('Content-Type', 'application/json');
  //$response->body(json_encode(['data' => []]));
  //echo '{"name": "saumya"}';
  $dataObj='{"name": "saumya"}';
  //$response->body(json_encode($dataObj));
  $response->body($dataObj);
});
//login user
$app->post('/v1.0/user/login',function() use ($app){
  loginUser($app);
});

//Upload image
$app->post('/v1.0/image/create',function() use ($app){
  //TODO:
});
$app->get('/v1.0/image/all',function() use($app){
  //TODO:
});

//OLD APIs
//APIs : Start
$app->post('/register_beta',function() use ($app){
    onRegisterUserBeta($app);
});
// API methods
function onRegisterUserBeta($app){
    require_once 'icraft/mysql.php';
    $db = connect_db();
    //
    $request = $app->request;
    $userData = json_decode($request->getBody());
    // DB
    try{ 
        $sql = "INSERT INTO friends (name, phone, email, address, pincode) VALUES (?, ?, ?, ?, ?)";
        if($stmt = $db->prepare($sql)){
            $stmt->bind_param("sissi",$name,$phone,$email,$address,$pin);
            //
            $name = $userData->uName;
            $phone = $userData->phone;
            $email = $userData->email;
            $address = $userData->address;
            $pin = $userData->pin;
            //
            //echo json_encode($stmt);
            $stmt->execute();
            //
            $msg = 'SUCCESS';
            echo json_encode('{"result":"SUCCESS","message":"'.$msg.'"}');
            //echo ("{'result':'SUCCESS','message':'$msg'}");
            //
            $stmt->close();
            $db->close();
        }else{
            $msg = 'FAIL : $db->prepare($sql) : '.json_encode($stmt);
            //echo 'FAIL : $db->prepare($sql) : '.json_encode($stmt);
            echo json_encode("{'result':'FAIL','message':'$msg'}");
        }
    }catch(Exception $e){
        $msg = 'FAIL : $db->prepare($sql) : '.json_encode(var_dump($e));
        //echo '{"error":{"text":'. $e->getMessage() .'}}';
        echo json_encode("{'result':'FAIL','message':'$msg'}");
    }
}
//END : OLD APIs




// Start the Application
$app->run();
// End of Story
?>

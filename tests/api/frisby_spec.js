// APIs
// EndPoint : http://localhost:8080/myDev/2_slim/2_app/
// http://localhost:8080/myDev/2_slim/2_app/v1.0/user/register
// http://localhost:8080/myDev/2_slim/2_app/v1.0/user/login
// test : jasmine-node tests/api/ --verbose

// Frisby
var frisby = require('frisby');
var apiEndPoint = 'http://localhost:81/3_slim/2_iCraftAPI/2_app';
/*
frisby.create('Get the API endpoint to test')
  .get(apiEndPoint+'/')
    .expectStatus(200)
    .expectHeader('Content-Type','application/json')
    .expectHeaderContains('Content-Type', 'application/json')
    //.inspectJSON()
    //.inspectBody()
  .toss();
*/
// Testing the Fake API
frisby.create('Test the fake API')
  .get(apiEndPoint+'/testDB')
    .expectStatus(200)
    .expectHeaderContains('Content-Type', 'text/html')
  .toss();
// Register
frisby.create('User Registration')
  .post(apiEndPoint+'/v1.0/user/register',{"userName":"saumya","password":"saumyaPW","email":"saumya@saumyaray.com"},{json:true})
    .expectStatus(200)
    .expectHeaderContains('Content-Type', 'application/json')
  .toss();
// Login
frisby.create('User Login')
  .post(apiEndPoint+'/v1.0/user/login',{"userName":"saumya","password":"saumyaPW","email":"saumya@saumyaray.com"},{json:true})
    .expectStatus(200)
    .expectHeaderContains('Content-Type', 'application/json')
  .toss();

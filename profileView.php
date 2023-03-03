<?php
require 'function.php';
require("vendor/autoload.php");
$client = new MongoDB\Client('mongodb://localhost:27017');

// select a database (will be created automatically if it not exists)
$db = $client->profile;
// select a collection (will be created automatically if it not exists)
$coll = $db->selectCollection("Person_Details");
$record= $coll->find(["email"=>$username]);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div>
        Name: 
    </div>
  </body>
</html>
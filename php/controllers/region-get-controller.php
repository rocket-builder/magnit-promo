<?php
require '../connection.php';
require '../models/response.php';


  $regions = R::findAll('region');

  echo json_encode(new Response("Success", false, $regions));
?>

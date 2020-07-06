<?php
require '../connection.php';
require '../models/response.php';

if (isset($_POST[])) {
  $regions = R::findAll('region');

  echo json_encode(new Response("success", false, $regions));
}
?>

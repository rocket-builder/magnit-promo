<?php
require '../connection.php';
require '../models/response.php';


  if(isset($_POST['region'])) {

    if(R::findOne('region', ' title = :title', [':title' => $_POST['region']]) == null) {

          $region = R::dispense('region');
          $region->title = $_POST['region'];
          R::store($region);

          echo json_encode(new Response("Success :)", false, [ 'region_id' => R::findOne('region', ' title = :title', [':title' => $region->title])->id ] ));
    } else {

        echo json_encode(new Response("This region is already exists :(", true));
    }
  } else {

    echo json_encode(new Response("Not enought arguments :(", true));
  }
?>

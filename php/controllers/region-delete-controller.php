<?php
require '../connection.php';
require '../models/response.php';


  if(isset($_POST['region'])) {

    $region = R::findOne('region', ' title = :title', [':title' => $_POST['region']]);
    if($region != null) {

          R::trash($region);
          echo json_encode(new Response("Region ".$_POST['region']." successful deleted :)", false));
    } else {

        echo json_encode(new Response("This region is not exists :(", true));
    }
  } else {

    echo json_encode(new Response("Not enought arguments :(", true));
  }
?>

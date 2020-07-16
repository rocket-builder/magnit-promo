<?php
require '../models/response.php';
require '../connection.php';

if (isset($_POST['id'])) {

  if($_COOKIE['role'] == 'super') {

    $admin = R::load('user', $_POST['id']);

    if(!is_null($admin)) {

      if($admin->role == 'admin') {

        R::trash($admin);

        echo json_encode(new Response("Successful deleted :)", false));

      } else {
          echo json_encode(new Response("Selected user is not an admin :(", true));
      }

    } else {
        echo json_encode(new Response("Admin not exist :(", true));
    }

  } else {

    echo json_encode(new Response("Access denied :(", true));
  }
} else {

  echo json_encode(new Response("Not enought arguments :(", true));
}

?>

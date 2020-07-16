<?php
require '../models/response.php';
require '../connection.php';

if (isset($_POST['login']) && isset($_POST['password'] && isset($_POST['region_id']))) {

  if($_COOKIE['role'] == 'admin') {

    if (is_null(R::findOne('user', 'login = ?', [ $login ])) {

      $admin = R::dispense('user');

      $admin->login = $_POST['login'];
      $admin->password = $_POST['password'];
      $admin->role = 'admin';
      $admin->region = R::load('region', $_POST['region_id']);

      R::store($admin);

      echo json_encode(new Response("Success :)", false, ['admin' => $admin]));

    } else {
        echo json_encode(new Response("This login is already used :(", true));
    }

  } else {

     echo json_encode(new Response("Access denied :(", true));
   }

} else {

  echo json_encode(new Response("Not enought arguments :(", true));
}




?>

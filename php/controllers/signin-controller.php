<?php
  require '../connection.php';
  require '../models/response.php';

  if(
      isset($_POST['login']) &&
      isset($_POST['password']) &&
      isset($_POST['region'])
    ) {

      $login = $_POST['login'];
      $hash = crypt($_POST['password']);
      $region = $_POST['region'];

      $user = R::findOne('user', 'login = ?', [ $login ]);
      $region = R::findOne('region', 'title = ?', [ $region ]);
      if($user == null) {

        if($region != null) {

          $user = R::dispense('user');
          $user->login = $login;
          $user->password = $hash;
          $user->region = $region;

          R::store($user);

          setcookie ("login", $login);
          setcookie("password", $hash);
          setcookie("region_id", $user->region->id);

          echo json_encode(new Response("Success", false, [ $user ]));
        } else {
            echo json_encode(new Response("This region does not exist :(", true));
        }

      } else {
          echo json_encode(new Response("This login is already used :(", true));
      }

    } else {

      echo json_encode(new Response("Not enought arguments :(", true));
    }
?>

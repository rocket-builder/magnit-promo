<?php
  require '../connection.php';
  require '../models/response.php';

  if(
      isset($_POST['login']) &&
      isset($_POST['password'])
    ) {

      $login = $_POST['login'];
      $password = $_POST['password'];

      $user = R::findOne('user', 'login = ?', [ $login ]);

      if($user != null) {

        if (hash_equals($user->password, crypt($password, $user->password))) {

          setcookie ("login", $login);
          setcookie("password", $hash);
          setcookie("region_id", $user->region->id);

          echo json_encode(new Response("Success", false, [ $user ]));
        } else {
          echo json_encode(new Response("Bad password :(", true));
        }
      } else {
        echo json_encode(new Response("User with this login not exist :(", true));
      }

    } else {

      echo json_encode(new Response("Not enought arguments :(", true));
    }
?>

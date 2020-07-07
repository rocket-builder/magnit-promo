<?php
  require '../connection.php';
  require '../models/response.php';
  require '../utils/values.php';

  if(isset($_POST['range'])) {

    $range = (int)$_POST['range'];

    if(get_int_lenght($range) == 12) {

      $cards = R::find('card', ' truncate(card.value / 10000, 0) = :range', [':range' => $range]);

      if(count($cards) != 0) {

        echo json_encode(new Response("Success :)", false, [ 'cards' => $cards ]));
      } else {
        echo json_encode(new Response("Cards not exist :(", true));
      }

    } else {

      echo json_encode(new Response("Incorrect card range :(", true));
    }

  } else {

    echo json_encode(new Response("Not enought arguments :(", true));
  }
?>

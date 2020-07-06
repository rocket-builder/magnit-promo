<?php
  require '../utils/values.php';
  require '../models/response.php';
  require '../connection.php';

  if(isset($_POST['id'])) {

      $id = (int)$_POST['id'];

      $card = R::findOne('card', 'id = ?', [ $id ]);
      if($card != null) {

        if($card->use_date == NULL) {

          $url = "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=".$card->value;

          $card->use_date = date('Y-m-d');
          R::store($card);

          echo json_encode(new Response('Success', false, [ 'url' => $url ]));
        } else {

          echo json_encode(new Response("This card already used :(", true));
        }
      } else {

        echo json_encode(new Response("This card are not exists :(", true));
      }

  } else {

    echo json_encode(new Response("Incorrect arguments :(", true));
  }
?>

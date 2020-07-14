<?php
  require '../connection.php';
  require '../models/response.php';
  require '../models/card-generator.php';

  if(isset($_POST['range']) && isset($_COOKIE['region_id'])) {

      $range = (int)$_POST['range'];
      $region = R::load('region', $_COOKIE['region_id']);

      if(get_int_lenght($range) == 12) {

          if(count(R::find('card', 'value > :range_start AND value < :range_end',
              [
                ':range_start' => $range * 10000,
                ':range_end' => $range * 10000 + 9999
              ])) == 0) {

              $cards = Card::generate($range, 1001);

              foreach ($cards as $value) {

                $card = R::dispense('card');
                $card->value = $value;
                $card->region = $region;
                $card->upd_date = date('Y-m-d');
                R::store($card);
              }

              echo json_encode(new Response("Successful generated :)", false, ["region" => $region, "cards" => $cards]));
          } else {

              echo json_encode(new Response("Card range is already exists :(", true));
          }

      } else {

        echo json_encode(new Response("Incorrect card range :(", true));
      }

    } else {

      echo json_encode(new Response("Not enought arguments :(", true));
    }
?>

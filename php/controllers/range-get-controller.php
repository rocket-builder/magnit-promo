<?php
  require '../connection.php';
  require '../models/response.php';
  require '../models/range.php';
  require '../utils/values.php';

  $ranges = R::findAll('card', 'group by truncate(card.value / 10000, 0)');

  if(count($ranges) != 0) {

    $range_arr = array();
    foreach ($ranges as $range) {

      $range_obj = new Range(truncate($range->value / 10000, 0), $range->upload_date, R::load('region', $range->region_id));
      $range_obj->set_card_count(
        R::count('card', ' truncate(card.value / 10000, 0) = ? ', [ truncate($range->value / 10000, 0) ])
      );

      $range_obj->set_used_count(
        R::count('card', ' card.use_date is not null AND truncate(card.value / 10000, 0) = ? ', [ truncate($range->value / 10000, 0) ])
      );

      array_push($range_arr, $range_obj);
    }

    echo json_encode(new Response("Success :)", false, [ 'ranges' => $range_arr ]));
  } else {

    echo json_encode(new Response("Ranges not exist :(", true));
  }

?>

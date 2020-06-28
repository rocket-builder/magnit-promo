<?php
  require '../utils/values.php';

  class Card {

      public static function generate($range, $count) {
        if(get_int_lenght($range) == 12) {

          $base = $range * 10000;

            $cards = [];
            for ($i=0; $i < $count-1; $i++) {

              $cards[$i] = $base + rand(0, 9999);
            }

          return $cards;
        } else
            throw new Exception('Incorrect card range.');
      }
  }
?>

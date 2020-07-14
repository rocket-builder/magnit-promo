<?php
require '../utils/values.php';
require '../models/response.php';
require '../connection.php';

if(
  isset($_POST['card_id']) &&
  isset($_POST['balance'])
) {

  $card = R::load('card', $_POST['card_id']);
  if($card != null) {

    $promo = R::dispense('promo');
    $promo->value = $card->value;
    $promo->region = $card->region;

    //TODO check balance type on decimal
    $promo->balance = $_POST['balance'];
    R::store($promo);

    $card->use_date = date('Y-m-d');
    R::store($card);

    echo json_encode(new Response('Successful added', false));
  } else {

    echo json_encode(new Response("Card not exist :(", true));
  }
} else {

  echo json_encode(new Response("Not enought arguments :(", true));
}
?>

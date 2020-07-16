<?php
require '../utils/values.php';
require '../models/response.php';
require '../connection.php';


if (
  isset($_POST['number']) &&
  isset($_POST['token'])
) {

  //TODO valid qiwi wallet number and token

  $qiwi = R::dispense('qiwi');
  $qiwi->number = $_POST['number'];
  $qiwi->token = $_POST['token'];

  R::store($qiwi);

  echo json_encode(new Response("Success :)", false, [ 'qiwi' => $qiwi ]));
}
?>

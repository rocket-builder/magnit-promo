<?php
require '../models/response.php';
require '../connection.php';


echo json_encode(new Response("Success", false, [ 'orders' => R::findAll('orders', ' order by id desc')]));
?>

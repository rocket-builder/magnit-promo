<?php
require '../models/response.php';
require '../connection.php';

$qiwi = R::findAll( 'qiwi' , ' ORDER BY id DESC LIMIT 1');

echo json_encode(new Response("Success :)", false, [ 'qiwi' => $qiwi ]));
?>

<?php
require '../models/response.php';
require '../connection.php';

$qiwi = R::findAll( 'qiwi' , ' ORDER BY id DESC ' )[0];

echo json_encode(new Response("Success :)", false, [ 'qiwi' => $qiwi ]));
?>

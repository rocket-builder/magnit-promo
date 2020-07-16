<?php
require '../models/response.php';
require '../connection.php';

$admins = R::find('user', " role = 'admin' ");

echo json_encode(new Response("Success", false, [ 'admins' => $admins ]));
?>

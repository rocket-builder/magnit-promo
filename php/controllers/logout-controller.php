<?php
  require '../models/response.php';

  setcookie ("login", "", time() - 3600);
  setcookie ("password", "", time() - 3600);
  setcookie ("region", "", time() - 3600);

  echo json_encode(new Response("Success", false));
?>

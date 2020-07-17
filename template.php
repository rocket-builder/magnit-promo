<?php

if (isset($_GET['value'])) {

$url = "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=".$_GET['value'];

}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Магнит</title>
  </head>
  <body>

    <img src="<?php echo $url ?>"></img>

  </body>
</html>

<?php

require_once 'config/config.php';
require_once 'config/connection.php';
$dbInstance = new Connection($host, $user, $pass, $db);

// get models

include('models/model.php');
$models = new Model($dbInstance);

// end get models


?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title></title>

</head>

<body>

       <?php include('pages/page.php'); ?>

</body>

</html>

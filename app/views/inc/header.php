<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php
    // Auto link *.css file in "public/css/"
    $fileList = glob("css/*.css");
    foreach ($fileList as $fileName) {
      echo '<link rel="stylesheet" href="' . URLROOT . '/' . $fileName . '">';
    }
    // exp: <link rel="stylesheet" href="http://localhost/shareposts/css/bootstrap.min.css">
  ?>
  <link rel="icon" type="image/ico" href="<?php echo URLROOT; ?>/img/logo/logo.png">
  <title><?php echo SITENAME; ?></title>
</head>
<body>

<!-- <script src="<?php echo URLROOT; ?>/js/main.js"></script> -->
<?php
  // Auto link *.js file in "public/js/"
  $fileList = glob("js/*.js");
  foreach ($fileList as $fileName) {
    echo '<script src="' . URLROOT . '/' . $fileName . '"></script>';
  }
  // exp: <link rel="stylesheet" href="http://localhost/shareposts/css/bootstrap.min.css">
?>
</body>
</html>

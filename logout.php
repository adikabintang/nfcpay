<?php
session_start();
session_destroy();
header("Refresh: 1; url=index.php");
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <!-- Ikon Website -->
  <link rel="shortcut icon" href="../images/iconui.ico">
  
  <title>NFC Pay</title>
  
</head>
<body>
    <div>    
      <h1>Sign Out</h1>
      <p>Redirecting.. or <a href="index.php">click here</a></p>
</div>

</body>
</html>
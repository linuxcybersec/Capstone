<?php
require 'nic/db_config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login Panel</title>
  <!-- connecting links page using  php -->
<?php 
require('inc/links.php'); 
?>

  <style>
    .h-font {
      font-family: "Kavoon", serif;
    }

    /*to remove number in bar */
    /* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}


div.login-form{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width:400px;
}
  </style>
</head>
<body class="bg-light">

  <div class="login-form text-center rounded bg-white shadow overflow-hidden">
    <!-- using post because of sensitive data -->
<form method="POST">
<h4 class="bg-dark text-white py-3">ADMIN LOGIN PANEL </h4>
<!-- to apply padding  p-4 -->
<div class=p-4>
 <div class="mb-3">
     
            <input name="admin_name" required type="text" class="form-control shadow-none text-center" placeholder="Admin Name">
          </div>
          <div class="mb-4">
      
            <input name="admin_pass"  required type="password" class="form-control shadow-none text-center" placeholder="Password">
          </div>
          <button name="login" type="submit" class="btn text-white btn btn-success shaodw-none">LOGIN </button> 
</div>
</form>
</div>
    
<?php require('inc/scripts.php'); ?>
</body>
</html>
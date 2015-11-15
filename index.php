<html>
<head>
  <title>Ads On Ubers</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <style>
    body {
      text-align: center;
      background: url("/static/images/car-driving-into-sunset.jpg");
      background-size: cover;
      background-position: center;
      color: white;
      font-family: helvetica;
    }
    p {
      font-size: 22px;
    }
    input {
      border: 0;
      padding: 10px;
      font-size: 18px;
    }
    
    .navbar-default {
    background-color: #FFF;
    }

    
    .navbar ul {
        list-style-type: none; /*to remove bullets*/
        text-align: center;
        padding: 0px;
        zoom:1;
        
        overflow: hidden;
    }
    .navbar li{
        padding: 2px;
        width: 100px;
        display:inline-block;
    }
    .navbar-brand {
      
      width: 300px;
    }

    p {
      color: #000000;
    }

    #form-container {
      background-color: white;
      border-radius: 3px;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
    }
  </style>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><p>Ads on Ubers</p></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      
        
        
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <div id="form-container">
    <form method="post" action="home.php">
      <label>Name</label>
      <input type="text" name="name" />
      <label>Email Address</label>
      <input type="text" name="email" />
      <label>Phone number</label>
      <input type="text" name="phone" />
      <input type="checkbox" name="driver" value="Driver"> Driver<br>
      <input type="checkbox" name="owner" value="Business Owner"> Business Owner<br>
    </form>
  </div>

<?php
  if($_POST["name"]) {
      mail("davidscott.pal@gmail.com", "Contact Form Filled", "Name: " . $_POST["name"] . " " . "Email: " . $_POST["email"] . " phone #: " . $_POST["phone"] . " driver? " . $_POST["driver"] . " business owner? " . $_POST["owner"], "From: info@adsonubers.com");
  }
?>

</body>
</html>
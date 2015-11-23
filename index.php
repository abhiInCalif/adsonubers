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
      font-family: helvetica;
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

    #form-container {
      margin-top: 5px;
      background-color: white;
      border-radius: 3px;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      color: black;
      width: 50%;
    }

    #form-container label {
      float: left;
    }

    #form-container .checkbox {
      height: 20px;
    }
  </style>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

fbq('init', '987132398024600');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=987132398024600&ev=PageView&noscript=1"/></noscript>
<!-- End Facebook Pixel Code -->
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
  <div id="form-container" class="form-group">
    <?php
      // if ($_POST["name"]) {
    ?>
      <!-- <h3>We will be in contact with you soon</h3> -->
    <?php
      // } else {
    ?>
    <h3>I would like to learn more about putting ads on Ubers</h3>
    <?php
      // }
    ?>
<!--     <form method="post" action="index.php">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="Name"/>
      <label for="email">Email Address</label>
      <input type="text" class="form-control" name="email" id="email" placeholder="Email"/>
      <label for="phone" >Phone number</label>
      <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone"/>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="driver" value="Driver"> Driver<br />
        </label>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="owner" value="Business Owner"> Business Owner<br />
        </label>
      </div>
      <p>
        <button type="submit" class="btn btn-default">Submit</button>
      </p>
    </form> -->
    <iframe src="https://docs.google.com/forms/d/11RPHUOtZcl8bLSALVBR1zq3REY8usQG1-ezdPIns1bg/viewform?embedded=true" width="100%" height="500" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
  </div>

<?php
  // if($_POST["name"]) {
  //     mail("abhi1994@gmail.com", "Contact Form Filled", "Name: " . $_POST["name"] . " \r\n" . "Email: " . $_POST["email"] . " phone #: " . $_POST["phone"] . " driver? " . $_POST["driver"] . " business owner? " . $_POST["owner"], "From: info@adsonubers.com");
  //     mail("davidscott.pal@gmail.com", "Contact Form Filled", "Name: " . $_POST["name"] . " \r\n" . "Email: " . $_POST["email"] . " phone #: " . $_POST["phone"] . " driver? " . $_POST["driver"] . " business owner? " . $_POST["owner"], "From: info@adsonubers.com");

  // }
?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-70482935-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>

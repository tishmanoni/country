<?php

session_start()



?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1">
     <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/site.webmanifest">
    <title>Contact</title>
    <style>

          .jumbotron {
        background-image: url(image3.jpg);
        background-size: cover;
        height: 100%;}
    </style>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/60a78142185beb22b30f675a/1f6751rl8';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
  </head>
  <body>
    <?php include('templates/loader.php'); ?>
    <?php include('templates/header.php'); ?>



        <div class="jumbotron jumbotron-fluid bg-dark">
          <div class="container">
            <h1 style="text-align:center; color:white; background-color:black;">CONTACT US</h1>
          </div>

        </div>


        <div class="container">
          <div class="row">
            <div class="col-xl-12 shadow-lg m-5 py-4">

              <small>VISIT US</small>
              <br>
              <br>
              <p style="font-size:30px">Address: Country GardenFunds Investment Pty 112 Hallar Street Lima Ohio 45801 USA</p>

              <hr class="my-5">
            </div>

              <div class="col-xl-12 shadow-lg m-5 col-lg-12 col-md-12 col-sm-12 py-4">


               <form method="post">
                   <h2 class="text-center">CONTACT FORM</h2>
                   <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
                   <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                   <div class="form-group"><textarea class="form-control" name="message" placeholder="Message" rows="6"></textarea></div>
                   <div class="form-group"><button class="btn btn-success" type="submit">SEND </button></div>
               </form>
               </div>

             </div>

            </div>




        <?php include('templates/footer.php'); ?>

  </body>
</html>

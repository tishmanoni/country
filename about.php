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
    <link rel="stylesheet" href="css/about.css">
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital@1&display=swap" rel="stylesheet">

    <title>About Us</title>
    <style>
      body{
        font-family: 'Karla', sans-serif;
      }
    </style>
  </head>
  <style>

      .jumbotron {
      background-image: url(pexels-binyamin-mellish-106399.jpg);
      background-size: cover;
      background-repeat: no-repeat;

      background-position: center;
      height: 260px;}
  </style>
  <body>
      <?php include('templates/loader.php'); ?>
    <?php include('templates/header.php'); ?>

    <div class="jumbotron jumbotron-fluid bg-dark">
      <div class="container">
        <h1 style="text-align:center; color:white; background-color:black;">ABOUT US</h1>
      </div>

    </div>


    <div class="container">
      <div class="row">
        <div class="col-md-12 col-12 col-sm-12 col-xl-12 col-lg-12 shadow-lg p-5 my-4">
          <p class="p-4" style="font-size:17px">Country Gardenis a private trading investment company with state of the art system for forex and digital currency trading.
        Founded in August 2010.<br><br>
        We are a group of experts who works with “Digital Currency Trading” Forex,
         Precious Metals and “Binary Options Market”, mainly with the Bitcoin (BTC) and Ethereum (ETH) Coins.
         Our Team of Experts are Working Every Day to Make a Profit and Pass on Excellent
         Investment Returns (ROI) to All our Investor Clients. We Work with Transparency and our Greatest Interest is to Satisfy all our Investor
         Clients with Excellent Support, Fast Payouts and High Return for your Investment. You can Invest with us from anywhere in the World and
         Withdraw your Earnings Daily in your Wallet.
         We want to be one of the Best Investment Companies in the International Market.
         You can Contact us 24 hours a day, 7 days a week .</p>
       </div>

       <div class="col-xl-12 shadow-lg p-5">


         <img src="about-team.jpg" class="img-fluid mx-auto d-block" alt="">
         <br>
         <!-- <h5 class="mt-4 mx-4">What do we do?</h5>
         <h2 class="mx-4 ">Our Mission, Values and Motto</h2>
         <p class="px-4">FidelityFx strategy focuses in providing unparalleled support,
            tools and an innovation for professional traders and h
           liquidity providers around the world. As a fiduciary to our clients,
           it is our responsibility to ensure that clients are provided with the utmost benefit.
         </p> -->

       </div>


         <div class="col-xl-12 shadow-lg p-5 mt-5 mb-5 ">
               <div class="card shadow-sm bg-dark p-3 c">
                 <div class="card-body my-4" style="color:#e8e8e8">
                     <h6>WHO WE ARE</h6>
                    <h4 class="my-3" style="color:white; font-weight:bold; ">Our Mission, Values and Motto</h3>
                     <p class="">We are an active, technology driven investment firm. We want our members
to achieve the best results for their investments, both in locally and
internationally. To do this, we implement learning, training and development
initiatives to ensure compliance with the law and industry best practices</p>
                    <p>Our mission is to maximize the value our clients derive from their most precious commodity.</p>
                     <p class="">As a fiduciary to our client, it is our responsibility to ensure that clients are provided with the utmost benefit …peace of mind!</p>

                  </div>
               </div>
         </div>
        </div>
      </div>






<?php include('templates/footer.php'); ?>

  </body>
</html>

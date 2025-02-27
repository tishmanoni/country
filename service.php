<?php

session_start()



?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1">
    <title>Service</title>
     <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="stylesheet" href="css/service.css">
    <style>

          .jumbotron {
        background-image: url(pexels-lorenzo-241544.jpg);
        background-size: cover;
        height: 100%;}
    </style>
  </head>
  <body>
      	<?php include('templates/loader.php'); ?>
    <?php include('templates/header.php'); ?>


            <div class="jumbotron jumbotron-fluid bg-dark">
              <div class="container">
                <h1 style="text-align:center; color:white">SERVICES</h1>
              </div>

            </div>


            <div class="container">
              <div class="row mb-4 mt-5">
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mypad">
                    <div class="mycard">
                        <img src="image/service-90-win-rate.jpg" class="myimage" alt="Avatar" style="width:280px; height:200px;">
                        <div class="mycontainer">
                          <h4 class="mt-3"><b>90%+ Win-Rate.</b></h4>
                          <p>Many of our users generate up to 90% win-rate with their strategies and systems using our binary option robot</p>
                        </div>
                      </div>
                  </div>

                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mypad">
                    <div class="mycard">
                        <img src="image/service-cdfs.jpg" class="myimage" alt="Avatar" style="width:280px; height:222px;">
                        <div class="mycontainer">
                          <h4 class="mt-3"><b>CDFs</b></h4>
                          <p>Financial derivatives that allow you to trade on the movement of underlying assets.</p>
                        </div>
                      </div>
                  </div>


                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 hide  mypad ">
                    <div class="mycard">
                        <img src="image/service-binary-options.jpg" class="myimage" alt="Avatar" style="width:280px; height:222px;">
                        <div class="mycontainer">
                          <h4 class="mt-3"><b>Real Estate</b></h4>
                          <p>As well as all these great products,we also deal in real estate.</p>
                        </div>
                      </div>
                  </div>
              </div>

              <div class="row mt-5 mb-4">
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mypad">
                    <div class="mycard">
                        <img src="image/service-stock-indices.jpg" class="myimage" alt="Avatar" style="width:280px; height:200px;">
                        <div class="mycontainer">
                          <h4 class="mt-3"><b>Stocks/Indies.</b></h4>
                          <p>ETF is another new addition to the platform that offers an excellent way to diversify your investment portfolio with less risk and high return.</p>
                        </div>
                      </div>
                  </div>

                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mypad">
                    <div class="mycard">
                        <img src="image/service-forex-trading.jpg" class="myimage" alt="Avatar" style="width:280px; height:248px;">
                        <div class="mycontainer">
                          <h4 class="mt-3"><b>Forex Trading</b></h4>
                          <p>Forex or ( Foreign Exchange) , is the largest and most liquid market in the world, with daily trades.</p>
                        </div>
                      </div>
                  </div>


                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 hide  mypad ">
                    <div class="mycard">
                        <img src="image/service-risk-management.jpg" class="myimage" alt="Avatar" style="width:280px; height:200px;">
                        <div class="mycontainer">
                          <h4 class="mt-3"><b>Risk Management</b></h4>
                          <p>Going into the trading market can be a bold move for someone who has no experience at all and can have pretty dire consequences at times.</p>
                        </div>
                      </div>
                  </div>
              </div>
            </div>












        <?php include('templates/footer.php'); ?>

  </body>
</html>

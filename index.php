<?php

session_start()



?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>

    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/site.webmanifest">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/hover.css">
      <!-- <link rel="stylesheet" href="css/background.css"> -->
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/loader.css">
    <link href="css/our-service.css" rel="stylesheet" type="text/css">
    <!-- testimonial css -->
    <link href="mycss/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


    		<style>
    		*{
    			margin: 0;
    			padding: 0;
    		}

        .content{
                  color:#fff;
                  width: 100%;
                  height: 100vh;
                  background-image: url('pexels-chris-goodwin-32870.jpg');
                  background-repeat: no-repeat;
                  background-size: cover;
                  background-position: center;
        }
    		.principal{
    			left: 50%;
    			top: 70%;
    			transform: translate(-50%, -50%);
    			position: absolute;
    			letter-spacing: 2px;
    			text-align: left;
          background-color:rgba(0, 0, 0, 0.5);
          height: 380px;
          padding: 15px;
          width: 650px;

    		}
    		.principal h1{
    				font-size: 50px;
    				margin-bottom: 20px;
            padding-bottom: 15px;
            padding-left: 15px;
            padding-top: 20px;
            color: #F7CD29;
    		}
    		.principal p{
    				font-size: 20px;
            padding-bottom: 15px;
            padding-left: 15px;
    		}

        .principal2{
          left: 50%;
          top: 50%;
          transform: translate(-50%, -50%);
          position: relative;
          letter-spacing: 2px;
          text-align: left;
          background-color:rgba(0, 0, 0, 0.5);
          height: 380px;
          padding: 15px;
          width: 650px;

        }
        .principal2 h1{
            font-size: 50px;
            margin-bottom: 20px;
            padding-bottom: 15px;
            padding-left: 15px;
            padding-top: 20px;
            color: #F7CD29;
        }
        .principal2 p{
            font-size: 20px;
            padding-bottom: 15px;
            padding-left: 15px;
        }




        .content2{
              color:#fff;
              width: 100%;
              height: 100vh;
              background-image: url('pexels-binyamin-mellish-106399.jpg');
              background-repeat: no-repeat;
              background-size: cover;
              background-position: center;
    }
    		@media screen and (max-width:800px) {
    			.principal{
    				left: 50%;
    				top: 55%;
    				transform: translate(-50%, -50%);
    				position: relative;

    				letter-spacing: 2px;
    				text-align: center;
            width: 300px;
    			}
    			.principal h1{
    					font-size: 30px;
    					margin-bottom: 20px;
    			}
    			.principal p{
    					font-size: 15px;
              text-align: center;
    			}

          .principal2{
    				left: 50%;
    				top: 55%;
    				transform: translate(-50%, -50%);
    				position: relative;
    				letter-spacing: 2px;
    				text-align: center;
            width: 300px;
    			}
    			.principal2 h1{
    					font-size: 30px;
    					margin-bottom: 20px;
    			}
    			.principal2 p{
    					font-size: 15px;
    			}


    		}

        	@media screen and (max-width:674px) {

            .principal2{
      				left: 50%;
      				top: 55%;
      				transform: translate(-50%, -50%);
      				position: relative;
      				letter-spacing: 2px;
      				text-align: center;
              width: 300px;
      			}




          }






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


                  <div class="content">
                    <div class="principal">
                      <h1>Country Garden Investment</h1>
                      <p>An investment platform delivering you a professionally managed portfolio of real estate assets..</p>
                      <?php if(!isset($_SESSION['loggedin'])): ?>
                      <a href="registers.php" class="btn btn-warning ml-3 mt-4 btn-lg btn-edit hvr-pulse" style="font-size:18px">Open Account</a>
                      <a href="registration.php" class="btn btn-primary mt-4 btn-lg btn-edit hvr-pulse" style="font-size:18px">Login</a>

                      <?php else: ?>
                        <a href="dashboard" class="btn btn-warning btn-lg" style="font-size:18px">Enter your dashboard</a>
                      <?php endif; ?>
                    </div>

                  </div>



<!--
                <div class="row3 " style="background-color:#fff">


                      <div class="container">
                        <div class="row">
                          <div class="col-12">
                            <h3 class="mt-5 mb-5 adjustment-h">OUR SERVICES</h3>

                          </div>

                          <div class="flex-container mb-4">


                            <div class="our-services">
                              <span><i class="fas fa-gem fa-2x mt-2 text-warning"></i></span>
                              <h4 class="p-3"><a href="binary.php"> Binary Trading </a></h4>
                            <p class="p-3">As well as all these great products, you can also trade on over 10 million Digital Options.</p>
                          </div>

                          <div class="our-services">
                            <span><i class="fas fa-coins fa-2x mt-2 text-warning"></i></span>
                            <h4 class="p-3"><a href="crypto.php">Crypto</a></h4>
                          <p class="p-3">Cryptocurrency pairs including Bitcoin, Ethereum, and Litecoin.Cryptocurrency pairs including Bitcoin, Ethereum, and Litecoin.</p>
                        </div>


                      </div>



                  </div>

                </div>

              </div> -->




              <div class="row5">


                <div class="container">
                    <div class="row">

                      <div class="col-md-6">

                        <h3>HOW WE HELP YOU BUILD WEALTH</h2>
                        <h2>With one investment, you are instantly a co-owner in a Country Gardenportfolio of real estate assets.</h2>
                        <p>We’re taking real estate investing to the next level by opening up private REIT investments to all investors (accredited or not) from one simple platform.</p>
                        <?php if(!isset($_SESSION['loggedin'])): ?>
                          <button type="button" name="button">WATCH HOW IT WORKS</button>


                        <?php endif; ?>


                      </div>


                      <div class="col-md-6">

                        <img src="DF_website_laptop_mobile_properties.png" class="img-fluid" alt="">

                      </div>

                    </div>

                </div>


              </div>
              
                 <div class="container" style="margin-top:10px;">
     <div class="card-deck mb-3 text-center">
       <div class="card mb-4 box-shadow">
         <div class="card-header">
           <h4 class="my-0 font-weight-normal">Starter Plan</h4>
         </div>
         <div class="card-body">
           <h1 class="card-title pricing-card-title">25% <small class="text-muted">ROI</small></h1>
           <ul class="list-unstyled mt-3 mb-4">
             <li>Minimum: 150$</li>
             <li>Maximum: 1000$</li>
             <li>Contact Duration- 7 Days</li>
           </ul>

           <a href="dashboard/deposit.php" style="text-decoration:none"><button type="button" class="btn btn-lg btn-block btn-outline-info">Deposit</button></a>
         </div>
       </div>
       <div class="card mb-4 box-shadow">
         <div class="card-header">
           <h4 class="my-0 font-weight-normal">Premium Plan</h4>
         </div>
         <div class="card-body">
           <h1 class="card-title pricing-card-title">50% <small class="text-muted">ROI</small></h1>
           <ul class="list-unstyled mt-3 mb-4">
             <li>Minimum: 1000$</li>
             <li>Maximum: 5000$</li>
             <li>Contact Duration- 7 Days</li>
           </ul>

                      <a href="dashboard/deposit.php" style="text-decoration:none"><button type="button" class="btn btn-lg btn-block btn-outline-info">Deposit</button></a>
         </div>
       </div>
       <div class="card mb-4 box-shadow">
         <div class="card-header">
           <h4 class="my-0 font-weight-normal">Enterprise Plan</h4>
         </div>
         <div class="card-body">
           <h1 class="card-title pricing-card-title">75% <small class="text-muted">ROI</small></h1>
           <ul class="list-unstyled mt-3 mb-4">
             <li>Minimum: 5000$</li>
             <li>Maximum: 20000$</li>
             <li>Contact Duration- 7 Days</li>
           </ul>
              <a href="dashboard/deposit.php" style="text-decoration:none"><button type="button" class="btn btn-lg btn-block btn-outline-info">Deposit</button></a>
         </div>
       </div>

       <div class="card mb-4 box-shadow">
         <div class="card-header">
           <h4 class="my-0 font-weight-normal">Professional Plan</h4>
         </div>
         <div class="card-body">
           <h1 class="card-title pricing-card-title">90% <small class="text-muted">ROI</small></h1>
           <ul class="list-unstyled mt-3 mb-4">
             <li>Minimum: 20000$</li>
             <li>Maximum: Unlimited</li>
             <li>Contact Duration- 7 Days</li>
           </ul>
                      <a href="dashboard/deposit.php" style="text-decoration:none"><button type="button" class="btn btn-lg btn-block btn-outline-info">Deposit</button></a>
         </div>
       </div>
     </div>
     </div>
              
               <div class="container" style="margin-top:12px; ">

                  <div class="row">

                  <div class="embed-responsive embed-responsive-16by9" >

                   <iframe width="560" height="315" src="https://www.youtube.com/embed/VXeaU0i54H0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                       
                   </iframe>

                  </div>

                  <div class=" embed-responsive embed-responsive-16by9 mt-4 ">

                  <iframe width="560" height="315" src="https://www.youtube.com/embed/zshlrp-6n1o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                      
                  </iframe>
                  </div>

                </div>

              </div>



              <div class="container">
                <div class="row why">
                  <h2 class="mt-5" style="text-decoration: underline;">Why Country Garden investment?</h2>

                  <p class="text-center mt-2">New traders or seasoned professionals can experience the full suite of powerful trading technology, online brokerage services, and trading education all under one roof.</p>


                  <div class="col-md-4">
                    <p style="text-align:center;">
                    <img src="ico_03.png" class="img-fluid text-center" width="100px" height="100px" alt="">
                    </p>
                    <h3 class="text-center">Platform</h3>
                    <p class="text-center">Our platform is built with multiple inflow streams in mind to allow for investors seamless transactions. Our method of deposit is cryptocurrency andcash deposit.</p>
                  </div>

                  <div class="col-md-4">
                    <p style="text-align:center;">
                    <img src="ico_02.png" class="img-fluid text-center" width="100px" height="100px" alt="">
                    </p>
                    <h3 class="text-center">Products</h3>
                    <p class="text-center">You trade it. We have it.</p>
                  </div>

                  <div class="col-md-4">
                    <p style="text-align:center;">
                    <img src="ico_04-2.png" class="img-fluid text-center" width="100px" height="100px" alt="">
                    </p>
                    <h3 class="text-center">24/7 Customer Support</h3>
                    <p class="text-center">Our in-house, expert team is always on hand to help answer your questions, get you started, and grow your presence online. You can call, chat or email us any time!</p>
                  </div>



                </div>

                <div class="row why mt-3 mb-4">

                  <div class="col-md-4">
                    <p style="text-align:center;">
                    <img src="ico_06.png" class="img-fluid text-center" width="100px" height="100px" alt="">
                    </p>
                    <h3 class="text-center">Pricing</h3>
                    <p class="text-center">Spend your time trading, not wondering what it costs</p>
                  </div>

                  <div class="col-md-4">
                    <p style="text-align:center;">
                    <img src="ico_05.png" class="img-fluid text-center" width="100px" height="100px" alt="">
                    </p>
                    <h3 class="text-center">Advice You Can Trust</h3>
                    <p class="text-center">We believe in our corporate mission of helping our investors manage their most priced assets and we’re always glad to offer the much needed assistance.</p>
                  </div>

                  <div class="col-md-4">
                    <p style="text-align:center;">
                    <img src="ico_01.png" class="img-fluid text-center" width="100px" height="100px" alt="">
                    </p>
                    <h3 class="text-center">Accounts</h3>
                    <p class="text-center">Create an account</p>
                  </div>



                </div>


                <div class="row why mt-3 mb-4">

                  <div class="col-md-6">
                    <p style="text-align:center;">
                    <img src="cooperation.png" class="img-fluid text-center" width="100px" height="100px" alt="">
                    </p>
                    <h3 class="text-center">Country Garden investment is trusted</h3>
                    <p class="text-center">We’re early industry pioneers and have been around since 2010, successfully processed more than 55 billion US dollars in transactions and have happy customers in over 40 countries.</p>
                  </div>

                  <div class="col-md-6">
                    <p style="text-align:center;">
                    <img src="why2.jpeg" class="img-fluid text-center" width="100px" height="100px" alt="">
                    </p>
                    <h3 class="text-center">Open and equal</h3>
                    <p class="text-center">We believe in our corporate mission of helping our investors manage their most priced assets and we’re always glad to offer the much needed assistance.</p>
                  </div>




                </div>

                <!-- get started -->
                <div class="row started">

                  <div class="col">
                    <?php if(!isset($_SESSION['loggedin'])): ?>
                      <p class="text-center mt-4 mb-4"><a href="dashboard" class="btn btn-warning btn-lg" style="font-size:18px">GET STARTED</a></p>


                    <?php endif; ?>

                  </div>

                </div>
              </div>





                <!-- <div class="container-fluid bg-dark">
                  <div class="row">
                    <div class="col-xl-3 mt-5 ml-5">

                    </div>
                    <div class="col-xl-2">

                    </div>

                    <div class="col-xl-6 mt-2 mb-5 ">

                    </div>
                  </div>
                </div> -->
                <!-- <div class="row2">


                      <div class="container">

                        <div class="row">
                          <div class="col">

                              <h2 class="text-center">Featured In</h2>

                          </div>


                        </div>

                        <div class="row">

                          <div class="col d-inline-flex ">



                              <img src="img/logo-bloomberg.png" height="40px;" alt="">
                              <img src="img/logo-curbed.png" alt="">
                              <img src="img/logo-entrepreneur.png" alt="">
                              <img src="img/logo-marketwatch.png" alt="">
                              <img src="img/logo-observer.png" alt="">
                              <img src="img/logo-uli.png" alt="">
                              <img src="img/logo-fast-company.png" alt="">


                          </div>

                        </div>

                      </div>

                </div> -->






                <div class="demo" style="background:#f0f0f0">
                       <div class="container">
                           <div class="row">
                             <div class="col-md-12">
                                <h1 style="text-align:center; color:black;" class="mb-4"> Testimonials </h1>
                                <h2 class="mt-4">What our Clients are saying....</h2>
                             </div>

                           </div>

                           <div class="row">
                               <div class="col-md-12">
                                   <div id="testimonial-slider" class="owl-carousel">
                                       <div class="testimonial">
                                           <p class="description">
                                               I want to thank Country Gardenfor getting me setup to trade cryptocurrency. Now is the time to invest more.”
                                           </p>
                                           <div class="pic">
                                               <img src="testimonial1.jpeg" alt=""/>
                                           </div>
                                           <div class="testimonial-prof">
                                               <h4>  Tomoya Hara</h4>
                                               <small>From Japan</small>
                                           </div>
                                       </div>

                                       <div class="testimonial">
                                           <p class="description">
                                             Within the first few hours of signing up for Country Garden, I had doubled my investment subscription. The information, the team , and the entire community are always so helpful. I would consider this one of the best crypto communities in the entire space!
                                           </p>
                                           <div class="pic">
                                               <img src="images/person-2.jpg" alt=""/>
                                           </div>
                                           <div class="testimonial-prof">
                                               <h4>Mike Mittelman</h4>
                                               <small>From London</small>
                                           </div>
                                       </div>

                                       <div class="testimonial">
                                           <p class="description">
                                              I had an extremely informative session today detailing how it works, How to purchase it and how make profit from it . Mr. Chiu laid out for me simple strategies and important information to get me started so I can secure the best possible investment opportunity.
                                           </p>
                                           <div class="pic">
                                               <img src="testimonial2.jpeg" alt=""/>
                                           </div>
                                           <div class="testimonial-prof">
                                               <h4>Jin Pyo Park </h4>
                                               <small>From South Korea</small>
                                           </div>
                                       </div>

                                       <div class="testimonial">
                                           <p class="description">
                                              Country Gardenhas been the go to source for all of the information I have obtained about blockchain technology and cryptocurrency. I was in the dark about all of it and I owe all of my progress to this informative site and their team.
                                           </p>
                                           <div class="pic">
                                               <img src="images/team4-large.jpg" alt=""/>
                                           </div>
                                           <div class="testimonial-prof">
                                               <h4>Tim Miller </h4>
                                               <small>From chicago</small>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>





                     <div class="slider ">
                       <div class="content2">
                         <div class="principal2">
                           <h1>Ready to Get Started?</h1>
                           <p>Join the thousands of investors building a diversified real estate portfolio and building wealth.</p>
                           <?php if(!isset($_SESSION['loggedin'])): ?>
                                <a href="dashboard" class="btn btn-warning btn-lg" style="font-size:18px">GET STARTED</a>


                           <?php endif; ?>


                         </div>

                       </div>
                       </div>






                   <div class="row6">

                     <div class="container">

                       <div class="col">

                         <p>Country Garden, Inc. (“Country Garden”) operates a website at Country Gardenasset.com (the “Site”). By using the Site, you accept our <span style="font-weight:bold;"> Terms of Service</span> and <span style="font-weight:bold;">Privacy Policy.</span>  Past performance is no guarantee of future results. Any historical returns, expected returns, or probability projections may not reflect actual future performance. All securities involve risk and may result in partial or total loss. Neither Country Gardennor any of its affiliates provides tax advice or investment recommendations and do not represent in any manner that the outcomes described herein or on the Site will result in any particular investment or tax consequence. Prospective investors should confer with their personal tax advisors regarding the tax consequences based on their particular circumstances. Neither Country Gardennor any of its affiliates assume responsibility for the tax consequences for any investor of any investment. This message is not a proposal to sell or the solicitation of interest in any security, which can only be made through official documents such as a private placement memorandum or a prospectus.

                        Due to state regulatory restrictions, we are not currently able to accept new investors residing in Arkansas and are not making any solicitation or offer to sell securities to any person or entity residing or domiciled in that state.</p>

                       </div>

                     </div>

                   </div>

                 




              <?php include('templates/footer.php'); ?>












<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script src="js/myjs.js"></script>

 <script>
$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:3,
        itemsDesktop:[1199,3],
        itemsDesktopSmall:[1000,2],
        itemsTablet:[767,1],
        pagination: false,
        navigation:true,
        navigationText:["",""],
        autoPlay:false
    });
});
 </script>



</body>
</html>
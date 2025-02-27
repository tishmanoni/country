<?php
session_start();
if (!isset($_SESSION['loggedin'])){

  header('Location: /registration.php ');
  exit;

}


 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dashboard</title>

        <!-- META SECTION -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
        <!-- END META SECTION -->
        <!-- CSS INCLUDE -->
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/mystyle.css">
        <style>

        .logo{
          font-size: 20px;
          letter-spacing: 2px;
          font-weight: bold;
          color:  #F2BE13;
          padding-top: 16px;
          padding-left: 15px;
          padding-bottom: 15px;
          border-bottom: 1px solid gray;
        }
        </style>
        <!-- EOF CSS INCLUDE -->
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

        <!-- APP WRAPPER -->
        <div class="app">

            <!-- START APP CONTAINER -->
            <div class="app-container">
                <!-- START SIDEBAR -->
                <div class="app-sidebar app-navigation app-navigation-fixed scroll app-navigation-style-default app-navigation-open-hover dir-left" data-type="close-other">
                  <a href="/index.php">
                    <p class="logo">Country Garden</p>
                  </a>

                    <nav>
                      <ul>

                          <li>
                              <a href="index.php"><span class="nav-icon-hexa">Ds</span> Dashboard</a>

                          </li>
                            <?php if ($_SESSION['role'] == 'Admin'): ?>
                         <li>
                            <a href="/myadmin"><span class="nav-icon-hexa">De</span> Admin<span class="label label-success label-bordered label-ghost">new</span></a>

                        </li>
                        <?php endif; ?>
                          <li>
                              <a href="deposit.php"><span class="nav-icon-hexa">De</span> Deposit<span class="label label-success label-bordered label-ghost">new</span></a>

                          </li>
                          <li>
                              <a href="withdraw.php"><span class="nav-icon-hexa">Wi</span> Withdraw</a>

                          </li>
                          <li>
                                <a href="transaction.php"><span class="nav-icon-hexa">Ad</span> Transaction</a>

                          </li>
                          <li>
                              <a href="/profile.php"><span class="nav-icon-hexa">Se</span> Settings</a>

                          </li>

                          <li>
                              <a href="/logout.php"><span class="nav-icon-hexa">Lg</span> Logout</a>

                          </li>





                      </ul>
                    </nav>
                </div>
                <!-- END SIDEBAR -->

                <!-- START APP CONTENT -->
                <div class="app-content app-sidebar-left">
                    <!-- START APP HEADER -->
                    <div class="app-header app-header-design-default">
                        <ul class="app-header-buttons">
                            <li class="visible-mobile"><a href="#" class="btn btn-link btn-icon" data-sidebar-toggle=".app-sidebar.dir-left"><span class="icon-menu"></span></a></li>
                            <li class="hidden-mobile"><a href="#" class="btn btn-link btn-icon" data-sidebar-minimize=".app-sidebar.dir-left"><span class="icon-menu"></span></a></li>
                        </ul>
                        <form class="app-header-search" action="" method="post">
                            <input type="text" name="keyword" placeholder="Search">
                        </form>

                        <ul class="app-header-buttons pull-right">
                            <li>
                                <div class="contact contact-rounded contact-bordered contact-lg contact-ps-controls hidden-xs">

                                    <div class="contact-container">
                                        <a href="#"><?=$_SESSION['firstname']?></a>
                                        <span><?=$_SESSION['role']?></span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="dropdown">
                                    <button class="btn btn-default btn-icon btn-informer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="icon-alarm"></span><span class="informer informer-danger informer-sm informer-square">+1</span></button>
                                    <ul class="dropdown-menu dropdown-form dropdown-left dropdown-form-wide">
                                        <li class="padding-0">

                                            <div class="app-heading title-only app-heading-bordered-bottom">
                                                <div class="icon">
                                                    <span class="icon-text-align-left"></span>
                                                </div>
                                                <div class="title">
                                                    <h2>Notifications</h2>
                                                </div>
                                                <div class="heading-elements">
                                                    <a href="#" class="btn btn-default btn-icon"><span class="icon-sync"></span></a>
                                                </div>
                                            </div>

                                            <div class="app-timeline scroll app-timeline-simple text-sm" style="height: 240px;">

                                                <div class="app-timeline-item">
                                                    <div class="dot dot-primary"></div>
                                                    <div class="content">
                                                        <div class="title margin-bottom-0"><a href="#">Welcome to Country Garden.</div>
                                                    </div>
                                                </div>



                                            </div>

                                        </li>
                                        <li class="padding-top-0">
                                            <button class="btn btn-block btn-link">Preview All</button>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="/logout.php" class="btn btn-default btn-icon"><span class="icon-power-switch"></span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- END APP HEADER  -->

                    <!-- START PAGE HEADING -->

                    <div class="app-heading-container app-heading-bordered bottom">
                        <ul class="breadcrumb">
                            <li><a href="#" style="">Country Garden</a></li>
                            <li class="active">Dashboard</li>
                        </ul>
                    </div>
                    <!-- END PAGE HEADING -->

                    <!-- START PAGE CONTAINER -->
                    <div class="container">


                      <div class="row">

                        <div class="col-md-6">

                          <div class="app-widget-tile">
                              <div class="line">
                                <h2 class="h2">Hello <?=$_SESSION['firstname']?>!!</h2>
                                  <h2 style="font-weight:bold;">Account ID: <span style="font-weight:lighter"><?=$_SESSION['customer_id']?></span> </h2>

                              </div>


                          </div>

                        </div>

                        <div class="col-md-6">
                          <div class="app-widget-tile">
                          <h2 class="date-regis">Date Registered</h2>
                          <p><?=$_SESSION['registered_date']?></p>
                        </div>



                        </div>

                      </div>



                        <div class="row">


                            <div class="col-md-6">
                              <div class="block block-condensed">
                                <div class="app-heading app-heading-small">


                                        <!-- START WIDGET -->
                                      <div class="app-widget-informer ">
                                       <div class="row">
                                           <div class="col-md-4">
                                            <h2 class="title">Assets Interest <span class="badge badge-sm badge-default badge-bordered">?</span> </h2>
                                            <div class="intval"><?=$_SESSION['profit']?></div>
                                            <div class="title"><span class="label label-success label-ghost label-bordered">+3.5%</span></div>



                                           </div>
                                           <div class="col-md-8">
                                             <span class="sparkline pull-right" sparkType="bar" sparkBarColor="#4FC0E8" sparkWidth="100%" sparkHeight="100" sparkBarWidth="12">5,4,3,2,4,5,6,7,8,6,4,5</span>

                                           </div>
                                       </div>
                                   </div>
                                        <!-- END WIDGET -->


                            </div>
                            </div>
                            </div>


                            <div class="col-md-6">
                              <div class="block block-condensed">
                                <div class="app-heading app-heading-small">


                                        <!-- START WIDGET -->
                                      <div class="app-widget-informer ">
                                       <div class="row">
                                           <div class="col-md-6">
                                            <h2 class="title">Distribution frequency </h2>
                                            <div class="edit">No frequecy trade</div>
                                            <div class="title"><span class="label label-primary label-ghost label-bordered">+13.6%</span></div>



                                           </div>
                                           <div class="col-md-6">
                                              <span class="sparkline pull-right" spotColor="" sparkFillColor="#FFF" sparkLineWidth="2" sparkLineColor="#76AB3C" sparkSpotColor="#76AB3C" sparkMaxSpotColor="#76AB3C" sparkMinSpotColor="#76AB3C" sparkWidth="100%" sparkHeight="40">5,4,3,2,4,5,6,7,8,6,4,5</span>

                                           </div>
                                       </div>
                                   </div>
                                        <!-- END WIDGET -->


                            </div>
                            </div>
                            </div>


                        </div>

                        <div class="row">


                            <div class="col-md-4">
                              <div class="block block-condensed">
                                <div class="app-heading app-heading-small">


                                        <!-- START WIDGET -->
                                      <div class="app-widget-informer ">


                                            <h2 class="title">Amount Invested </h2>


                                            <h1 class="text-success"><?=$_SESSION['amount_invested']?></h1>






                                   </div>
                                        <!-- END WIDGET -->


                            </div>
                            </div>
                            </div>


                            <div class="col-md-8">
                              <div class="block block-condensed">
                                <div class="app-heading app-heading-small">


                                        <!-- START WIDGET -->
                                      <div class="app-widget-informer ">

                                           <div class="col-md-6">
                                            <h2 class="title"><u>Fund Details </u></h2>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">30%</div>
                                              <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">40%</div>
                                              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%">30%</div>
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">30%</div>
                                            </div>

                                            <p class="editt">


                                                   <span class="badge badge-primary"> </span> <?=$_SESSION['customer_id']?> &nbsp;
                                                   <span class="badge badge-info"> </span> Total Annual Fund Operating Expense (Gross)&nbsp;
                                                   <span class="badge badge-success"> </span> Total Annual Fund Operating (Net)&nbsp;
                                                   <span class="badge badge-warning"> </span> Inception Date <?=$_SESSION['registered_date']?> &nbsp;



                                            </p>




                                           </div>


                                   </div>
                                        <!-- END WIDGET -->


                            </div>
                            </div>
                            </div>


                        </div>



                    </div>
                    <!-- END PAGE CONTAINER -->

                </div>
                <!-- END APP CONTENT -->

            </div>
            <!-- END APP CONTAINER -->

            <!-- START APP FOOTER -->
            <div class="app-footer app-footer-default" id="footer">

                <div class="container container-boxed">
                    <div class="app-footer-line">
                            <div class="copyright">&copy; 2021 Country Garden. All right reserved.</div>
                        <div class="pull-right">
                            <ul class="list-inline">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Privacy</a></li>

                                <li><a href="#">Contacts</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <!-- END APP FOOTER -->
            <!-- START APP SIDEPANEL -->
            <div class="app-sidepanel scroll" data-overlay="show">
                <div class="container">

                    <div class="app-heading app-heading-condensed app-heading-small padding-left-0">
                        <div class="icon icon-lg">
                            <span class="icon-alarm"></span>
                        </div>
                        <div class="title">
                            <h2>Notifications</h2>
                            <p><strong>7 new</strong>, latest: July 19, 2016 at 10:14:32.</p>
                        </div>
                    </div>

                    <div class="listing margin-bottom-10">
                        <div class="listing-item margin-bottom-10">
                            <strong>Product Delivered</strong> <span class="label label-success pull-right">delivered</span>
                            <p class="margin-0 margin-top-5">#SPW-955-18 to st. StreetName SA, USA.</p>
                            <p class="text-muted">
                                <span class="fa fa-truck margin-right-5"></span> 19/07/2016 10:14:32 AM
                            </p>
                        </div>
                        <div class="listing-item margin-bottom-10">
                            <strong>Successful Payment</strong> <span class="label label-success pull-right">success</span>
                            <p class="margin-0 margin-top-5">Payment for order #SPW-955-17: <strong>$145.44</strong>.</p>
                            <p class="text-muted">
                                <span class="fa fa-bank margin-right-5"></span> 19/07/2016 09:55:12 AM
                            </p>
                        </div>
                        <div class="listing-item margin-bottom-10">
                            <strong>New Order #SPW-955-17</strong> <span class="label label-warning pull-right">waiting</span>
                            <p class="margin-0 margin-top-5">Added new order, waiting for payment. <a href="#">Order details</a>.</p>
                            <p class="text-muted">
                                <span class="fa fa-bank margin-right-5"></span> 19/07/2016 09:51:55 AM
                            </p>
                        </div>
                        <div class="listing-item margin-bottom-10">
                            <strong>Money Back Request</strong> <span class="label label-primary pull-right">return</span>
                            <p class="margin-0 margin-top-5">#SPW-955-17 return requested. <a href="#">Request details</a>.</p>
                            <p class="text-muted">
                                <span class="fa fa-bank margin-right-5"></span> 19/07/2016 08:44:51 AM
                            </p>
                        </div>
                        <div class="listing-item margin-bottom-10">
                            <strong>The critical amount of product</strong> <span class="label label-danger pull-right">important</span>
                            <p class="margin-0 margin-top-5">Product: <a href="#">Extra Awesome Product</a> (amount: <span class="text-danger">2</span>). <a href="#">Storehouse</a>.</p>
                            <p class="text-muted">
                                <span class="fa fa-cube margin-right-5"></span> 19/07/2016 08:30:00 AM
                            </p>
                        </div>
                        <div class="listing-item margin-bottom-10">
                            <strong>Product Delivery Start</strong> <span class="label label-warning pull-right">delivering</span>
                            <p class="margin-0 margin-top-5">#SPW-955-18 to st. StreetName SA, USA.</p>
                            <p class="text-muted">
                                <span class="fa fa-truck margin-right-5"></span> 18/07/2016 06:14:32 PM
                            </p>
                        </div>
                        <div class="listing-item margin-bottom-10">
                            <strong>Critical Server Load</strong> <span class="label label-danger pull-right">server</span>
                            <p class="margin-0 margin-top-5">Disk space: 248.1Gb/250Gb. <a href="#">Control panel</a>.</p>
                            <p class="text-muted">
                                <span class="fa fa-truck margin-right-5"></span> 18/07/2016 06:14:32 PM
                            </p>
                        </div>
                    </div>
                    <div class="row margin-bottom-30">
                        <div class="col-xs-6 col-xs-offset-3">
                            <button class="btn btn-default btn-block">All Notification</button>
                        </div>
                    </div>

                    <div class="app-heading app-heading-condensed app-heading-small margin-bottom-20 padding-left-0">
                        <div class="icon icon-lg">
                            <span class="icon-cog"></span>
                        </div>
                        <div class="title">
                            <h2>Settings</h2>
                            <p>Notification Settings</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-2">
                                <label class="switch switch-sm margin-0">
                                    <input type="checkbox" name="app_settings_1" checked="" value="0">
                                </label>
                            </div>
                            <div class="col-xs-10">
                                <label>Delivery Information</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-2">
                                <label class="switch switch-sm margin-0">
                                    <input type="checkbox" name="app_settings_2" checked="" value="0">
                                </label>
                            </div>
                            <div class="col-xs-10">
                                <label>Product Amount Information</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-2">
                                <label class="switch switch-sm margin-0">
                                    <input type="checkbox" name="app_settings_3" checked="" value="0">
                                </label>
                            </div>
                            <div class="col-xs-10">
                                <label>Order Information</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-2">
                                <label class="switch switch-sm margin-0">
                                    <input type="checkbox" name="app_settings_4" checked="" value="0">
                                </label>
                            </div>
                            <div class="col-xs-10">
                                <label>Server Load</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-2">
                                <label class="switch switch-sm margin-0">
                                    <input type="checkbox" name="app_settings_5" value="0">
                                </label>
                            </div>
                            <div class="col-xs-10">
                                <label>User Registrations</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-2">
                                <label class="switch switch-sm margin-0">
                                    <input type="checkbox" name="app_settings_6" value="0">
                                </label>
                            </div>
                            <div class="col-xs-10">
                                <label>Purchase Information</label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- END APP SIDEPANEL -->

            <!-- APP OVERLAY -->
            <div class="app-overlay"></div>
            <!-- END APP OVERLAY -->
        </div>
        <!-- END APP WRAPPER -->

        <!--
        <div class="modal fade" id="modal-thanks" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm" role="document">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="icon-cross"></span></button>
                <div class="modal-content">
                    <div class="modal-body">
                        <p class="text-center margin-bottom-20">
                            <img src="assets/images/smile.png" alt="Thank you" style="width: 100px;">
                        </p>
                        <h3 id="modal-thanks-heading" class="text-uppercase text-bold text-lg heading-line-below heading-line-below-short text-center"></h3>
                        <p class="text-muted text-center margin-bottom-10">Thank you so much for likes</p>
                        <p class="text-muted text-center">We will do our best to make<br> Boooya template perfect</p>
                        <p class="text-center"><button class="btn btn-success btn-clean" data-dismiss="modal">Continue</button></p>
                    </div>
                </div>
            </div>
        </div>-->

        <!-- IMPORTANT SCRIPTS -->
        <script type="text/javascript" src="js/vendor/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/vendor/jquery/jquery-migrate.min.js"></script>
        <script type="text/javascript" src="js/vendor/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/vendor/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/vendor/moment/moment.min.js"></script>
        <script type="text/javascript" src="js/vendor/customscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <!-- END IMPORTANT SCRIPTS -->
        <!-- THIS PAGE SCRIPTS -->
        <script type="text/javascript" src="js/vendor/sparkline/jquery.sparkline.min.js"></script>
        <script type="text/javascript" src="js/vendor/knob/jquery.knob.min.js"></script>
        <script type="text/javascript" src="js/vendor/bootstrap-select/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script>
        <script type="text/javascript" src="js/vendor/maskedinput/jquery.maskedinput.min.js"></script>
        <script type="text/javascript" src="js/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script>

        <script type="text/javascript" src="js/vendor/jvectormap/jquery-jvectormap.min.js"></script>
        <script type="text/javascript" src="js/vendor/knob/jquery.knob.min.js"></script>
        <script type="text/javascript" src="js/vendor/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script type="text/javascript" src="js/vendor/jvectormap/jquery-jvectormap-us-aea-en.js"></script>

        <script type="text/javascript" src="js/vendor/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="js/vendor/rickshaw/rickshaw.min.js"></script>
        <!-- END THIS PAGE SCRIPTS -->
        <!-- APP SCRIPTS -->
        <script type="text/javascript" src="js/app.js"></script>
        <script type="text/javascript" src="js/app_plugins.js"></script>
        <script type="text/javascript" src="js/app_demo.js"></script>
        <!-- END APP SCRIPTS -->
        <script type="text/javascript" src="js/app_demo_dashboard.js"></script>

        <script type="text/javascript">
            $(function(){
                $(".block-refresh-example").on("click",function(){
                    var block = $(this).data("block");
                    app.block.loading.start("#"+block);
                    setTimeout(function(){
                        app.block.loading.finish("#"+block);
                    },3000);
                });
            });
        </script>

    </body>
</html>

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
        <title>Deposit</title>

        <!-- META SECTION -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

           <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
        <!-- END META SECTION -->
        <!-- CSS INCLUDE -->
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/mystyle.css">
        <!-- EOF CSS INCLUDE -->

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
                <div class="app-sidebar app-navigation  app-navigation-fixed app-navigation-style-default dir-left" data-type="close-other">
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
                            <a href="/ever/logout.php"><span class="nav-icon-hexa">Lg</span> Logout</a>

                        </li>





                      </ul>
                    </nav>
                </div>
                <!-- END SIDEBAR -->

                <!-- START APP CONTENT -->
                <div class="app-content app-sidebar-left">
                    <!-- START APP HEADER -->
                    <div class="app-header">
                        <ul class="app-header-buttons">
                            <li class="visible-mobile"><a href="#" class="btn btn-link btn-icon" data-sidebar-toggle=".app-sidebar.dir-left"><span class="icon-menu"></span></a></li>
                            <li class="hidden-mobile"><a href="#" class="btn btn-link btn-icon" data-sidebar-minimize=".app-sidebar.dir-left"><span class="icon-list"></span></a></li>
                        </ul>
                        <form class="app-header-search" action="" method="post">
                            <input type="text" name="keyword" placeholder="Search">
                        </form>
                    </div>
                    <!-- END APP HEADER  -->

                    <!-- START PAGE HEADING -->

                    <div class="app-heading-container app-heading-bordered bottom">
                        <ul class="breadcrumb">
                            <li><a href="#">Country Garden</a></li>
                            <li class="active">DEPOSIT</li>
                        </ul>
                    </div>
                    <!-- END PAGE HEADING -->

                    <!-- START PAGE CONTAINER -->
                    <div class="container">


                      <div class="row">

                        <div class="block block-condensed">
                          <div class="col-md-12">
                              
                              
                              <div class="row how">

                             

                              <div class="col-lg-6">

                                <h1 style="text-decoration: underline;">How to Deposit with Bitcoins</h1>

                                <p>To fund your profile, log into your account and select "Deposit " from the left menu. You have to copy the company wallet address On the Deposit platform or use a QR code scanner.The deposit will be added to your account after receiving the right amount of the confirmations from the network.</p>
                              </div>
                              
                              <div class="col-lg-6">
                                 <!--  <h1 style="text-decoration: underline;">How to Deposit through online Transfer</h1>-->
                                 <!--<a href="deposit.pdf" target="_blank" style="color:green; font-size:18px; margin-left:3px;">Click here to View</a>-->
                                  
                              </div>

                            </div>

                            <div class="row">

                                <div class="col-md-12">




                                  <p class="payment"> Payment Methods <span class="label label-success label-ghost label-bordered">Save 25%</span></p>






                                </div>

                            </div>
                              <hr>

                            <div class="row">

                              <div class="col-md-6">

                                <div class="tile-basic deposit">
                                   <div class="tile-content text-center">
                                       <h3>BITCOIN</h3>
                                       <p>Bitcoin QR codes make it easy to make payment. make payment with bitcoin using company BTC Address or QR CODE</p>
                                       <img src="img/bitcoin.jpeg" width="200px" height="200px" alt="">
                                       <h2>bc1qs8hes5sdadddftw7em2xw0vzjdnla2jan6sjky</h2>
                                   </div>
                               </div>

                              </div>

                              <div class="col-md-6">

                               <!-- <div class="tile-basic deposit">-->
                               <!--    <div class="tile-content text-center">-->
                               <!--         <h3>Online Payment</h3>-->
                               <!--        <p> <span class="deposit-edit">Bank Name:</span> Standard Bank </p>-->
                               <!--        <p> <span class="deposit-edit">Account Number:</span> 051410583 </p>-->
                               <!--        <p> <span class="deposit-edit">Branch:</span> 051001 </p>-->
                               <!--        <p> <span class="deposit-edit">Type:</span> Current/Cheque </p>-->
                               <!--        <p> <span class="deposit-edit">Reference:</span> BX12AM9VH</p>-->
                               <!--    </div>-->
                               <!--</div>-->



                              </div>

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

            <!-- APP OVERLAY -->
            <div class="app-overlay"></div>
            <!-- END APP OVERLAY -->

        </div>
        <!-- END APP WRAPPER -->

        <!-- START SCRIPTS -->
        <script type="text/javascript" src="js/vendor/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/vendor/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/vendor/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/vendor/moment/moment.min.js"></script>

        <script type="text/javascript" src="js/vendor/customscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/vendor/bootstrap-select/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/vendor/select2/select2.full.min.js"></script>
        <script type="text/javascript" src="js/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script>

        <script type="text/javascript" src="js/vendor/maskedinput/jquery.maskedinput.min.js"></script>
        <script type="text/javascript" src="js/vendor/form-validator/jquery.form-validator.min.js"></script>

        <script type="text/javascript" src="js/vendor/noty/jquery.noty.packaged.js"></script>

        <script type="text/javascript" src="js/vendor/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="js/vendor/datatables/dataTables.bootstrap.min.js"></script>

        <script type="text/javascript" src="js/vendor/sweetalert/sweetalert.min.js"></script>
        <script type="text/javascript" src="js/vendor/knob/jquery.knob.min.js"></script>

        <script type="text/javascript" src="js/vendor/jvectormap/jquery-jvectormap.min.js"></script>
        <script type="text/javascript" src="js/vendor/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script type="text/javascript" src="js/vendor/jvectormap/jquery-jvectormap-us-aea-en.js"></script>

        <script type="text/javascript" src="js/vendor/sparkline/jquery.sparkline.min.js"></script>

        <script type="text/javascript" src="js/vendor/morris/raphael.min.js"></script>
        <script type="text/javascript" src="js/vendor/morris/morris.min.js"></script>

        <script type="text/javascript" src="js/vendor/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="js/vendor/rickshaw/rickshaw.min.js"></script>

        <script type="text/javascript" src="js/vendor/isotope/isotope.pkgd.min.js"></script>

        <script type="text/javascript" src="js/vendor/dropzone/dropzone.js"></script>
        <script type="text/javascript" src="js/vendor/nestable/jquery.nestable.js"></script>
        <script type="text/javascript" src="js/vendor/cropper/cropper.min.js"></script>

        <script type="text/javascript" src="js/vendor/tableexport/tableExport.js"></script>
        <script type="text/javascript" src="js/vendor/tableexport/jquery.base64.js"></script>
        <script type="text/javascript" src="js/vendor/tableexport/html2canvas.js"></script>
        <script type="text/javascript" src="js/vendor/tableexport/jspdf/libs/sprintf.js"></script>
        <script type="text/javascript" src="js/vendor/tableexport/jspdf/jspdf.js"></script>
        <script type="text/javascript" src="js/vendor/tableexport/jspdf/libs/base64.js"></script>

        <script type="text/javascript" src="js/vendor/bootstrap-daterange/daterangepicker.js"></script>
        <script type="text/javascript" src="js/vendor/bootstrap-tour/bootstrap-tour.min.js"></script>
        <script type="text/javascript" src="js/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
        <script type="text/javascript" src="js/vendor/fullcalendar/fullcalendar.js"></script>
        <script type="text/javascript" src="js/vendor/smartwizard/jquery.smartWizard.js"></script>

        <script type="text/javascript" src="js/app.js"></script>
        <script type="text/javascript" src="js/app_plugins.js"></script>
        <script type="text/javascript" src="js/app_demo.js"></script>
        <!-- END SCRIPTS -->
    </body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1">
    <title></title>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/pricing.css">
    <link rel="stylesheet" href="css/why.css">

    <!-- team -->
    <link rel="stylesheet" href="css/Team-one-B4-1.css">
<link rel="stylesheet" href="css/Team-one-B4.css">

    <!-- <link href="style.css" rel="stylesheet" type="text/css"> -->
    <link href="mycss/style.css" rel="stylesheet" type="text/css">
    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">


<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="mycss/style.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<!-- footer css -->
<link rel="stylesheet" href="assets/css/Footer-Dark.css">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css"> -->
<!-- <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="assets/fonts/ionicons.min.css">


<style>
@import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@500&display=swap');

body{
font-family: 'Rajdhani', sans-serif;
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

        <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>

  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "proName": "FOREXCOM:SPXUSD",
      "title": "S&P 500"
    },
    {
      "proName": "FOREXCOM:NSXUSD",
      "title": "Nasdaq 100"
    },
    {
      "proName": "FX_IDC:EURUSD",
      "title": "EUR/USD"
    },
    {
      "proName": "BITSTAMP:BTCUSD",
      "title": "BTC/USD"
    },
    {
      "proName": "BITSTAMP:ETHUSD",
      "title": "ETH/USD"
    }
  ],
  "colorTheme": "dark",
  "isTransparent": false,
  "displayMode": "adaptive",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->



  <nav class="navbar my-nav navbar-expand-lg">
    <a href="index.php" class="navbar-brand mr-4">

        <p class="logo"><img src="logo.png"> </p>
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"><i class="fa fa-bars bg-primary" aria-hidden="true"></i></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav ml-4 pb-1 pt-1">
            <a href="index.php" class="nav-item nav-link">HOME</a>&nbsp;&nbsp;&nbsp;
            <a href="about.php" class="nav-item nav-link">ABOUT US</a>&nbsp;&nbsp;&nbsp;
            <a href="contact.php" class="nav-item nav-link">CONTACT US</a>&nbsp;&nbsp;&nbsp;
             <a href="service.php" class="nav-item nav-link">SERVICES</a>&nbsp;&nbsp;&nbsp;

            <a href="team.php" class="nav-item nav-link">WHO WE ARE</a>&nbsp;&nbsp;&nbsp;
             <?php if(isset($_SESSION['loggedin'])): ?>
            <a href="dashboard" class="nav-item nav-link">DASHBOARD</a>&nbsp;&nbsp;&nbsp;
            <a href="profile.php" class="nav-item nav-link">PROFILE</a>&nbsp;&nbsp;&nbsp;
            <?php if ($_SESSION['role'] == 'Admin'): ?>
            <a href="myadmin/index.php" class="nav-item nav-link">ADMIN</a>&nbsp;&nbsp;&nbsp;
            <?php endif; ?>
            <a href="logout.php" class="nav-item nav-link btn">LOGOUT</a>&nbsp;&nbsp;&nbsp;
            <?php else: ?>
            <a href="registration.php" class="btn btn-warning mr-5">LOGIN/SIGNUP</a>
            <?php endif; ?>



        </div>

    </div>
</nav>


<script src="js/myjs.js">
</script>

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</script>
</body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/loader.css">
  </head>
<body onload="myFunction()" style="margin:0;">


    <div id="loaders">
      <img src="84.gif" alt="">
    </div>

       <div style="display:none;" id="myDiv">




         <script>
         var myVar;

         function myFunction() {
           myVar = setTimeout(showPage, 3000);
         }

         function showPage() {
           document.getElementById("loaders").style.display = "none";
           document.getElementById("myDiv").style.display = "block";
         }
         </script>
  </body>
</html>

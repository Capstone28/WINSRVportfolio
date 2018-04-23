<?php 
//login Session
//session_start();
//cannot route to this page if Session is not set
//if(!isset($_SESSION["faculty"]))
//{
//    header("location:../login.php");
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Student Portfolio</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  custom style sheet -->
    <link rel="stylesheet" href="css/new.css">
    
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../bootstrap-3.3.7/js/bootstrap.min.js"></script>
 
 	<link rel="icon" href="img/uiw.png" type="image/gif">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<!-- ------------------------------------- Carousel header Images ----------------------------------------------- -->

	<?php require('includes/headerHOME.php') ?>

<!-- ------------------ Stationary NAV bar under images ---------------------->
	<?php require('includes/nav.php') ?>

 <!-- -------------------------------------Container (CIS/ CSEC program Section)--------------------------------------- -->
<div id="band" class="container">
  <h3 class="text-center">Student Portfolios</h3>
  	<p>Lorem Ipsum skjdgnskjd g sdkfhg dkghn sdhg sdkg </p>
	<br>
	
</div>

<!-- --------------------------------Footer------------------------------------------ -->
	
	<?php require('includes/footerHOME.php') ?>
	
<!-- --------------------------------Sticky Nav---------------------------------- -->
<script>
$(document).ready(function(){
    /* affix the navbar after scroll below header */
    $(".navbar").affix({offset: {top: $("header").outerHeight(true)} });
});
</script> <!-- ----------------------------------------------------------------- -->


</body>
</html>
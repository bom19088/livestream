

<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>

<html>

<head>

    <title>HOME</title>

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>

<body>

<div class="container-fluid row" style="padding:0px;">
  <div class="col-sm-3 image-container" style="padding:10px;"> 
  <h1 style ="Font-size: 20px;">Hello, <?php echo $_SESSION['user_name']; ?></h1>
</iframe>
</div>
<div class="col-sm-3 image-container" style="padding:10px;"> 
  <h1 style ="Font-size: 20px;"> Welcome to LiveStreaming</h1>
</iframe>
</div>
<div class="col-sm-3 image-container" style="padding:10px;"> 
<button style=""><a href="https://buy.stripe.com/test_6oEbKFcy2eqO7vy3cc">Buy premium version</a></button>
</iframe>
</div>
<div class="col-sm-3 image-container" style="padding:10px;"> 
<a href="logout.php">Logout</a>
</iframe>
</div>
</div>
     <!-- <h1>Hello, <?php echo $_SESSION['user_name']; ?></h1> -->

     
     <div class="container-fluid row" style="padding:0px;">
  
<div class="col-sm-12 image-container" style="padding:20px;"> 
<iframe width="630" height="250"
src="https://www.youtube.com/embed/bJD2UkZpqdo">
</iframe>
</div>
</div>

     <div class="container-fluid row" style="padding:0px;">
  <div class="col-sm-4 image-container" style="padding:10px;"> 
  <iframe width="200" height="200"
src="https://www.youtube.com/embed/bJD2UkZpqdo">
</iframe>
</div>
<div class="col-sm-4 image-container" style="padding:10px;"> 
<iframe width="200" height="200"
src="https://www.youtube.com/embed/bJD2UkZpqdo">
</iframe>
</div>
<div class="col-sm-4 image-container" style="padding:10px;"> 
<iframe width="200" height="200"
src="https://www.youtube.com/embed/bJD2UkZpqdo">
</iframe>
</div>
</div>

     <!-- <iframe width="420" height="315"
src="https://www.youtube.com/embed/bJD2UkZpqdo">
</iframe> -->

<!-- <button><a href="https://buy.stripe.com/test_6oEbKFcy2eqO7vy3cc">Buy premium version</a></button> -->

<!-- <h3 a href ></h3>

     <a href="logout.php">Logout</a> -->

</body>

</html>

<?php 

}else{

     header("Location: index.php");

     exit();

}

 ?>
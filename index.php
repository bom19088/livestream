<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="type/css" href="style.css">
        <link rel="stylesheet" type="type/css" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>  

.red-border{
    margin: 10px;
  }

  .red-border:focus{
    border: 2px solid black;
    padding: 5px;
  }

  /* .highlight {
    border: 2px solid ;
  }
   */
  .highlight {
    transition: border 0.3s ease;
  }

  .highlight.clicked {
    border: 2px solid green
  }

 
  
  .highlightable.clicked {
    border: 2px solid red;
  }



</style>  



</head>
<body>
    <form action="login.php" method="post">
        <h2>LOGIN</h2>
        <?php if(isset($_GET['error'])) {?>
        <p class="error"> <?php echo $_GET['error'];?></p>
    <?php } ?> 
    <label> User Name</label>
    <input type="text" name="uname" placeholder="User Name">
    <br>
    <label>Password</label>
    <input type="password" name="password" placeholder="Password"></br>

<br>

<div class="container-fluid row" style="padding:0px;">
  <div class="col-sm-3 image-container" style="padding:0px;"> 
    <img src="/images/car1.jpg" class="highlight"alt="Girl in a jacket" width="200" height="100">
</div>

<div class="col-sm-3 image-container" style="padding:0px;"> 
    <img src="/images/dog1.jpg" class="highlight"alt="Girl in a jacket" width="200" height="100">
</div>

<div class="col-sm-3 image-container" style="padding:0px;"> 
    <img src="/images/car2.jpg" class="highlight"alt="Girl in a jacket" width="200" height="100">
</div> 

<div class="col-sm-6 image-container" style="padding:0px;"> 
        </div>
</div>
<div class="container-fluid row" style="padding:0px;">
<div class="col-sm-3 image-container" style="padding:0px;"> 
    <img src="/images/cat1.jpg" class="highlight"alt="Girl in a jacket" width="200" height="100">
</div>
<div class="col-sm-3 image-container" style="padding:0px;"> 
    <img src="/images/dog2.jpg" class="highlightable"alt="Girl in a jacket" width="200" height="100">
</div>
<div class="col-sm-3" style="padding:0px;"> 
    <img src="/images/car3.jpg" class=""alt="Girl in a jacket" width="200" height="100">
</div>

<div class="col-sm-6 image-container" style="padding:0px;"> 
        </div>
</div>

<div class="container-fluid row" style="padding:0px;">

<div class="col-sm-3 image-container" style="padding:0px;"> 
    <img src="/images/car5.jpg" class="highlightable"alt="Girl in a jacket" width="200" height="100">
</div>
<div class="col-sm-3 image-container" style="padding:0px;"> 
    <img src="/images/car4.jpg" class="highlightable"alt="Girl in a jacket" width="200" height="100">
</div>
<div class="col-sm-3" style="padding:0px;"> 
    <img src="/images/sports1.jpg" class=""alt="Girl in a jacket" width="200" height="100">
</div>
<div class="col-sm-6 image-container" style="padding:0px;"> 
        </div>
</div>
<br>
  
v>
<br>

    <button type="submit">Login</button>
        </form>
    


</body>
</html>
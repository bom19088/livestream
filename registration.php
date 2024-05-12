<html>  

<head>  

<meta name="viewport" content="width=device-width, initial-scale=1">  

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

  .highlight1 {
    border: 2px solid red;
  }
  
  .highlight {
transition: border 0.3s ease;
  }

  .highlight.clicked {
    border: 2px solid green
  }

  .highlightable {
    transition: border 0.3s ease;
  }
  
  .highlightable.clicked {
    border: 2px solid red;
  }



</style>  

<SCript>

document.addEventListener('DOMContentLoaded', function() {
  const image = document.querySelector('.highlightable');

  image.addEventListener('click', function() {
    this.classList.toggle('clicked');
  });
});


</SCript>
</head> 


<body>  

  <?php

    $fullname = $email = $gender = $comment = $age = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") { 

      $fullname = test_input($_POST["name"]);

      $email = test_input($_POST["email"]);

      $comment = test_input($_POST["comment"]);

      $gender = test_input($_POST["gender"]);

      $age = test_input($_POST["age"]);

    }

    function test_input($data) {

      $data = trim($data);

      $data = stripslashes($data);

      $data = htmlspecialchars($data);

      return $data;

    }

  ?>


<!-- <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  -->

<form action="login.php" method="post">

    <div class="container">  

    <center>  <h1>Registeration Form</h1> </center>  

    <hr>  

    <label> <b>Fullname</b> </label>   

    <input type="text" name="name" placeholder= "Fullname" size="50" required /> <br>


    <label for="email"><b>Email</b></label>  

    <input type="text" placeholder="Enter Email" name="email" required>  <br>

    <label for="password"><b>Password</b></label>  

<input type="password" placeholder="Password" name="password" required>  <br>

<label for="password"><b>Confirm Password</b></label>  

<input type="password" placeholder="Password" name="password" required>  <br>

    <label for="age"><b>Age</b></label>  

    <input type="text" placeholder="Enter Age" name="age" required>  <br>

    <div>  

    <label>   

    <b>Gender : </b> 

    </label><br>  

    <input type="radio" value="Male" name="gender" checked > Male   

    <input type="radio" value="Female" name="gender"> Female   

    <input type="radio" value="Other" name="gender"> Other  

    </div>  



    <div class="container-fluid row" style="padding:0px;">
  <div class="col-sm-3 image-container" style="padding:0px;"> 
    <img src="/images/car1.jpg" class="highlightable"alt="Girl in a jacket" width="200" height="100">
</div>

<div class="col-sm-3 image-container" style="padding:0px;"> 
    <img src="/images/dog1.jpg" class="highlight"alt="Girl in a jacket" width="200" height="100">
</div>

<div class="col-sm-3 image-container" style="padding:0px;"> 
    <img src="/images/car2.jpg" class="highlightable"alt="Girl in a jacket" width="200" height="100">
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
  



    <!-- <textarea name="comment" cols="50" rows="2" placeholder="Current Address" value="address" required>  

    </textarea>   -->

    <button type="submit" class="registerbtn">Register</button>    

  </form>  

  <!-- <b>Comment : </b>  -->

<!-- 
  <?php

    echo "<h2>Your Input:</h2>";

    echo $fullname;

    echo "<br>";

    echo $email;

    echo "<br>";

    echo $age;

    echo "<br>";

    echo $gender;

    echo "<br>";

    echo $comment;

    echo "<br>";

  ?> -->

</body>  

</html> 
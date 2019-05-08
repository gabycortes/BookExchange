<?php
session_start();
$name_email = 'name=' . $_SESSION['name'] . 
					'&email=' . $_SESSION['email'] . 
					'&picpath=' . $_SESSION['picpath'] . 
					'&bio=' . $_SESSION['bio'];
#print $name_email;
?>


<!-- <div>
<link rel = "stylesheet" href = "MainMenu.css">
<div class = "col1">
<ul class = "ul_css">
    <li class = "li_css">
        <a class = "li_css_a" href = "shopping.php?<?php print $name_email; ?>">Shopping</a>
    </li>
    <li class = "li_css">
    <a class = "li_css_a" href = "selling.php?<?php print $name_email; ?>">Selling</a> 
    </li>
    <li class = "li_css">
    <a class = "li_css_a" href = "profile.php?<?php print $name_email; ?>">Profile</a> 
    </li>
    <li class = "li_css">
        <a class = "li_css_a" href = "ShoppingCart.php?<?php print $name_email; ?>">Shopping Cart</a>
    </li>
   
</ul>
</div>
<div class = "col2">
<p>
 <a class = "cart" href="#">
          <span class="glyphicon glyphicon-shopping-cart"></span>
        </a>
        
</p>
</div>
</div> -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">
</head>
<body>
  <h1>
  Book Exchange
  </h1>
  <form action="search.php" method="GET">

<input type="text" name="query" />

<input class="submitbox" type="submit" value="Search" />

</form>
<div class="jumbotron">
            <!--can only write 10 when done or time is finished
            also you cant stop timer when you commence
            -->
            <div class="container">
                <div class="row">
                    <div class="col-md">
                    <a href="shopping.php?<?php print $name_email; ?>">Shopping</a>
                    </div>
                    <div class="col-md">
                            <a href="selling.php?<?php print $name_email; ?>">Selling</a>
                       </div>
                       <div class="col-md">
                       <a href="profile.php?<?php print $name_email; ?>">Profile</a>
                       </div>
                       <div class="col-md">
                       <a href="ShoppingCart.php?<?php print $name_email; ?>"><i class="fas fa-shopping-cart"></i></a>

                       <!-- <i class="fas fa-shopping-cart"></i> -->
                       </div>
                       
                </div>
                <div class="row">

</div>
            </div>
        </div>
  
</body>
</html>
<!--   
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#">something cool</a></p>
      <p><a href="#">something funny</a></p>
      <p><a href="#">something crazy</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Lab 5a</h1>
      <p>In today's lab we did this layout and edited it accordingly
      </p>
      <hr>
      <h3>Side note:</h3>
      <p>This is fun</p>
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div> -->

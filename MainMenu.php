
<?php
session_start();
$name_email = 'name=' . $_SESSION['name'] . 
'&email=' . $_SESSION['email'];
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

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="Main.php?<?php print $name_email; ?>"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav ">
      <li class="active"><a href="#">Home</a></li>
        <li><a href="shopping.php?<?php print $name_email; ?>">Shopping</a></li>
        <li><a href="selling.php?<?php print $name_email; ?>">Selling</a></li>
        <li><a href="profile.php?<?php print $name_email; ?>">Profile</a></li>

        <!-- <li class="active"><a href="Main.php?<?php print $name_email; ?>">Home</a></li>
        <li>  <a class = "li_css_a" href = "shopping.php?<?php print $name_email; ?>">Shopping</a></li>
        <li> <a class = "li_css_a" href = "selling.php?<?php print $name_email; ?>">Selling</a></li>
        <li><a class = "li_css_a" href = "profile.php?<?php print $name_email; ?>">Profile</a></li> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="ShoppingCart.php?<?php print $name_email; ?>"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
      </ul>
    </div>
  </div>
</nav>
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






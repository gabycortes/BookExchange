
<?php
session_start();
$name_email = 'name' . $_SESSION['name'] . 
'&email =' . $_SESSION['email'];

#print $name_email;

?>

<link rel = "stylesheet" href = "MainMenu.css">
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
</ul>
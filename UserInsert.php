<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
    include("connect_database.php");
    ?>   
<?php
$userInsert = "insert into users values('" . 
$_POST["name"] . // post recieves parameter from the user/web
"', '" .
$_POST["email"] .
"')";

$result = mysqli_query($connect, $userInsert); 
?>
</body>
</html>
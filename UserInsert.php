lines (31 sloc)  622 Bytes
    
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>

<?php
	include("Connect_Database.php");
?>

<?php

if ($_FILES["pic"])
{
    $pathname = "images/" . $_FILES['pic']['name'];
    move_uploaded_file($_FILES['pic']['tmp_name'], $pathname);
}
// print ($pathname);

	$userInsert = "insert into users (name, email, picpath, bio)  values('" . 
		$_POST["name"] .
		"', '" .
		$_POST["email"] .
		"', '" .
		$pathname .
		"', '" .
		$_POST["bio"] .
		"')";
	$result = mysqli_query($connect, $userInsert); 

	header("Location: login.html")
?>
</body>
</html>
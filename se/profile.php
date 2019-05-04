
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Profile Page</title>
</head>
<body>
<?php
    include("MainMenu.php");
?>
<form action="profileInsert.php" enctype="multipart/form-data" method="post">
<table align="center">
	<tr>
		<td>
		<p>
		<font size="6">
		
			<?php 
			
			
			print "Welcome ";
			print $_GET['name'];
			print "!";
			?>
			
		</font>
		</p
		</td>
	</tr>
	<tr>
		<td>
			
			<input type="file" name="pic" />
			<input type="submit" value="submit" />
		</td>
	</tr>
	
</table>
</form>
</body>
</html>  

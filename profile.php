
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

<?php
	include("Connect_Database.php");
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
</table>
</form>
<table align="center">
			<?php 
			
			$profile = "select * from users where name='" .
						$_GET["name"] ."'";
						$results2 = mysqli_query($connect, $profile);
	
				while($row = mysqli_fetch_assoc($results2))		
				{
					print "<tr>";
					print "<td>";
					print "<img src='";
					print $row["picpath"] . "' height='150' width='150'>";
					print "</td>";
					print "<td>";
					print "My Bio: ";
					print $row["bio"];
					print "</td>";				
					print "</tr>";
				}
			?> 
</table>	
<table align="center">

	<tr>
		<td>
		<p>
		<font size="6">
			<?php 		
				print "Books I am selling: ";
			?>
		</font>
		</p
		</td>
	</tr>
			<?php 
			
			$profile = "select * from books where email='" .
						$_GET["email"] ."'";
						$results2 = mysqli_query($connect, $profile);
				while($row = mysqli_fetch_assoc($results2))		
				{
		print "<tr>";
		print "<td>";
		print ($row["title"]);
		print "</td>";
		print "<td>";
		print "<img src='";
		print $row["picpath"] . "' height='50' width='50'>";
		print "</td>";
		
		print "<td>";
		print "<a href='bookDelete.php?";
		print "name=" . $_GET['name'] . '&email=' . $_GET['email'] . '&picpath=' . $_GET['picpath'] . '&bio=' . $_GET['bio'] . '&bookId=' . $row['bookId'] . "'>";
		print "DELETE";
		print "</a>";
		print "</td>";
		print "</tr>";
				}
			?> 
</table>		
</body>
</html>  


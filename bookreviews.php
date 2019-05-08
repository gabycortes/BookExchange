<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Book review</title>
</head>

<body>
<?php
    include("MainMenu.php");
?>
<?php
	include("Connect_Database.php");
?>

<?php
	$selectBooks = "select * from books";
	$results = mysqli_query($connect, $selectBooks);
?>
<h1>Book review</h1>

<table  border="2" width=400>
	<tr>
		<th>
			Book Picture 
		</th>
		<th>
			Title 
		</th>
		<th>
			Description
		</th>
		<th>
			Book Review
		</th>
		
	</tr>
<?php
	while($row = mysqli_fetch_assoc($results))
	{
		print "<tr>";
		
		print "<td>";
		print "<img src='" ;
		print $row["picpath"] . "' height=200 width=200>";
		print "</td>";
		
		print "<td>";
		print ($row["title"]);
		print "</td>";
		
		print "<td>";
		print $row["description"];
		print "</td>";

		print "<td>";
		print ($row["bookreview"]);
		print "</td>";

		print "</tr>";
	}
?>

</table>
</body>
</html>
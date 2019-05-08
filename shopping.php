<html>
<head>
<meta charset="utf-8">
<title>shopping Page</title>
</head>
<body>

<?php
    include("Main.php");
?>
<?php
	include("Connect_Database.php");
?>

<?php
	$selectBooks = "select * from books";
	$results = mysqli_query($connect, $selectBooks);
?>
<table align="center" border="2" width=400  class="table table-bordered table-striped table-hover">
	<tr>
		<th>
			Title
		</th>
		<th>
			Name
		</th>
		<th>
			Post Time
		</th>
		<th>
			Book Name
		</th>
		<th></th>
	</tr>
<?php
	while($row = mysqli_fetch_assoc($results))
	{
		print "<tr>";
		print "<td>";
		print ($row["title"]);
		print "</td>";
		print "<td>";
		print ($row["name"]);
		print "</td>";
		print "<td>";
		print ($row["posttime"]);
		print "</td>";
	
		print "<td>";
		print "<img src='";
		print $row["picpath"] . "' height = 80px width = 80px>";
		print "</td>";
		print "<td>";
		print "<a href='AddCart.php?";
		print "bookId=" . $row["bookId"] .  '&name=' . $_GET['name'] . '&email=' . $_GET['email'] . "'>";
		print "ADD TO CART";
		print "</td>";
		print "</tr>";
	
	// 	print "<td>";
	// 	print "<a href='UserDelete.php?";
	// 	print "email=" . $row["email"] . "'>";
	// 	print "DELETE";
	// 	print "</a>";
	// 	print "</td>";
	// 	print "</tr>";
	// 
}
?>
</table>
</body>
</html>
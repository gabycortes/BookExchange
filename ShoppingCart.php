<html>
<head>
<meta charset="utf-8">
<title>shopping Page</title>
</head>
<body>

<?php
include("Main.php")
 
?>
<?php
	include("Connect_Database.php");
?>

<?php
	$selectCart = "select * from cart where name ='" . $_GET["name"] . "'";
	$results = mysqli_query($connect, $selectCart);
?>
<table align="center" border="2" width=400>
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
	$getBooks = "select * from books where bookId='" . $row["book_id"] ."'";
    $bresult = mysqli_query($connect, $getBooks);
    while($row2 = mysqli_fetch_assoc($bresult))
    {
    print "<tr>";
		print "<td>";
		print ($row2["title"]);
		print "</td>";
		print "<td>";
		print ($row2["name"]);
		print "</td>";
		print "<td>";
		print ($row2["posttime"]);
		print "</td>";
	
		print "<td>";
		print "<img src='";
		print $row2["picpath"] . "' height = 80px width = 80px>";
		print "</td>";
		print "<td>";
		
		print "<a href='removeCart.php?";
        print "bookId=" . $row2["bookId"] .  '&name=' . $_GET['name'] . '&email=' . $_GET['email'] . "'>";
		print "REMOVE FROM CART";
		print "</td>";
        print "</tr>";
    }

}
?>
</table>
</body>
</html>
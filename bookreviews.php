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
	if(isset($_POST['updateReview'])){
		$reviewText = $_POST['reviewTextField'];
		$reviewUpdate = $_POST['updateReview'];
		$reviewBookTitle = $_POST['bookTitle'];
		$reviewBookID = $_POST['bookID'];
		$reviewUserID  = "";
		$userID = $_POST['userID'];
	}
	$userName = $_GET['userName'];
	$userEmail = $_GET['userEmail'];
	$bookTitle = $_GET['name'];
	$postTime = $_GET['postime'];
	$selectBooks = "SELECT * 
			  FROM books
			  WHERE `title` = '$bookTitle'
			  AND `posttime` = '$postTime'";
	//$selectBooks = "select * from books";
	$results = mysqli_query($connect, $selectBooks);
	
	if(isset($reviewUpdate) && $reviewUpdate === 'true'){
		$query = "INSERT INTO `reviews` (`bookID`, `title`, `userID`, `review`)
				  VALUES ('$reviewBookID', '$reviewBookTitle', '$userID', '$reviewText')";
		mysqli_query($connect, $query);
	}
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
		<!--
		<th>
			Book Review
		</th>
		-->
		
	</tr>
<?php
	while($row = mysqli_fetch_assoc($results))
	{
		$bookID = $row['bookId'];
		$bookTitle = $row['title'];
		
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

		//print "<td>";
		//print ($row["bookreview"]);
		//print "</td>";

		print "</tr>";
	}
	echo "</table>";
	
	$query = "SELECT `userid`
			  FROM `users`
			  WHERE `name` = '$userName'
			  AND `email` = '$userEmail'";
	$result = mysqli_query($connect, $query);
	
	while($row = mysqli_fetch_assoc($result)){
		$userID = $row['userid'];
	}
	//This is the textarea for reviews to be typed in.
?> 
	<form id="userReviews" action="/bookreviews.php?name=<?php echo $bookTitle; ?>&postime=<?php echo $postTime; ?>&userName=<?php echo $userName; ?>&userEmail=<?php echo $userEmail; ?>" method="POST" >
	<input type="hidden" name="updateReview" value="true">
	<input type="hidden" name="bookTitle" value="<?php echo $bookTitle; ?>">
	<input type="hidden" name="bookID" value="<?php echo $bookID; ?>">
	<input type="hidden" name="posttime" value="<?php echo $bookID; ?>">
	<input type="hidden" name="userID" value="<?php echo $userID; ?>">
	<input type="text" name="reviewTextField" ><br>
	<input type="submit" value="Submit Review">
	</form>
	<!-- <textarea for="userReviews" id="reviewTextField" name="reviewTextField" rows=5 cols=50></textarea> -->
	
	
<?php	
	//This is the table of all reviews
	$query = "SELECT a.review, b.name
	          FROM reviews as a
			  LEFT JOIN users b ON a.userID = b.userid
			  WHERE `bookID` = $bookID";
			  
	$result = mysqli_query($connect, $query);
	
	echo "<table border='2' width=400><tr><th>Reviews</th><th>Reviewer</th></tr>";
	
	while($row = mysqli_fetch_array($result)){
		$review = $row['review'];
		$author = $row['name'];
		
		echo "<tr><td>$review</td><td>$author</td></tr>";
	}
	echo "</table>";
	
	
	
?>

</table>
</body>
</html>
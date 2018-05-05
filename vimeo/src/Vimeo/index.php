<!DOCTYPE html>
<html>
<head>
	<title>vimeo test</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="" class="body">
	<div class="wrap">
<center>
	<div class="center">
	<h2>Vimeo search test</h2>
	<form action="search.php" method="post">
		<select name="sort">
		  <option value="relevant">Sort</option>
		  <option value="relevant">Relevant</option>
		  <option value="plays">Plays</option>
		  <option value="likes">Likes</option>
		  <option value="duration">Duration</option>
		  <option value="date">Date</option>
		  <option value="comments">Comments</option>
		  <option value="alphabetical">Alphabetical</option>
		</select>	

			
			

			<select name="direction">
				<option value="asc">Direction</option>
				<option value="asc">Asc</option>
				<option value="desc">Desc</option>
			</select>	
			<input type="search" name="query" placeholder="search">
			<input type="submit" name="submit" value="search" class="btn btn-block btn-success btn-lg">
	</form>
</div>
</center>
</div>

</body>
</html>
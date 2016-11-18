<?php 	
  /** 
 *@auther 
 *@huntereyes93@gmail.com 
 *2016-11-18 16:56:47 
  **/

	// Database connection 
	include_once 'database.php'; 
	//select query
	$query='SELECT * FROM `shouts` ORDER BY id DESC';
	$shouts=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>js chatboxt</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script  src="js/script.js"></script>

</head>
<body>

	<div id="container">
		<header>
			<h1> JS Shoutbox</h1>
		</header>

		<div id="shouts">
			<ul>
			<?php  
			while($row=mysqli_fetch_assoc($shouts)):?>
				<li>
				<?php echo $row['name']; ?>:
				<?php echo $row['shout']; ?>:
				<?php echo '<h5>'.$row['date'].'</h5>'; ?>
				</li>
			<?php  endwhile; ?>	
			</ul>
		</div>

		<footer>
			<form>
				<label>Name: </label>
				<input type="text" id="name">

				<label>Shout  Text " </label>
				<input type="text" id="shout">
				<input type="submit" id="submit" value="SHOUT!">
			</form>
		</footer>		
	</div>

</body>
</html>

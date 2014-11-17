<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="description" content="Finance Forum">
<meta name="keywords" content="Share Economy, India, Finance, Stocks,
								Analysis, Uber, Lyft, TaskRabbit">
<meta name="author" content="Milap Naik">	

	<title>BSE Review</title>
		
	<link rel="stylesheet" type="text/css" href="style.css"/>
	
	<!--[if lt IE 9]>
  	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  	<![endif]-->
</head>
<body>
	<nav>
	<ul>
		<li><a href="/index">Home</a></li>
		<li><a href="/reports">Reports</a></li>
		<li><a href="/analytics">Analytics</a></li>
	</ul>
	</nav>
	
	<br>
	<br>
	
	<?php
 		include('config.php');
		
		$article = $_GET["article"];
		
		$select="Select content FROM articles WHERE title='$article'";
		if (!mysqli_query($con,$select)) {
  			die('Error: ' . mysqli_error($con));
		}
		else{
			$result = mysqli_query($con, $select);
			$row = mysqli_fetch_array($result);
			
			echo $row['content']; 
			
		}
		
		mysqli_close($con);
	?>
	
	
	

</body>
<footer>
	<p>Sharpereturns.com created by Milap Naik and Niral Patel</p>
</footer>
</html>
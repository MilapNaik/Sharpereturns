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
	<section>
		<h2>Narendra Modi</h2>
		Modi is the 15th Prime Minister of India and 
		part of the BJP Party. He is formerly the 
		chief Minister of the State of Gujarat.    
		<img src="pics/modi.jpg" id = "modi" alt="Narendra Modi"
		style="width:228px;height:228px">
	</section>
	<section>
	<?php
 		//include('config.php');
		$con=mysqli_connect("localhost", "milap", "test", "milap_articles");
        
		// Check connection
		if (mysqli_connect_errno()) {
  			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		
		$select="Select title, linktitle FROM articles ";
		
		if (!mysqli_query($con,$select)) {
  			die('Error: ' . mysqli_error($con)); //Add redirect page if broken
		}
		else{
			$result = mysqli_query($con, $select);
			$count = 1;
			echo "<ul>", "/n";
			while($row = mysqli_fetch_array($result)) {
				
				echo "<li><a href='search.php?article={$row['linktitle']}'>
					  {$row['title']}</a></li>", "/n";
				$count++;
				
            }
            echo "</ul>", "/n";
		}
		
		mysqli_close($con);
	?>	
	
	<ul>
		<li><a href="search.php?article=8PointModel">8-Point Model</a></li>
		<li><a href="search.php?article=mycleanindia">My Clean India</a></li>
		<li><a href="search.php?article=arorafibers">Arora Fibers</a></li>

	</ul>
	</section>
	

</body>
<footer>
	<p>Sharpereturns.com created by Milap Naik and Niral Patel</p>
</footer>
</html>
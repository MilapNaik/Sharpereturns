<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="description" content="Finance Forum">
<meta name="keywords" content="Share Economy, India, Finance, Stocks,
								Analysis, Uber, Lyft, TaskRabbit">
<meta name="author" content="Milap Naik">	
<link rel="shortcut icon" href="pics/favicon.ico">
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
		<li><a href="/test">test</a></li>
	</ul>
	</nav>
	
	<br>
	<br>
	<aside id = "sidebar">
		
		<h2 text-align: "right">Narendra Modi</h2>
		
		<img src="pics/modi.jpg" id = "modi" alt="Narendra Modi"
		style="width:228px;height:228px" padding: "0px">
		<br>
		<article>
		Modi is the 15th Prime Minister of India and 
		part of the BJP Party. He is formerly the 
		chief Minister of the State of Gujarat. 
		</article>
		<br>
		<h3>Related Stocks:</h3>
		<ul>
			<li> Arora Fiber</li>
		</ul>
		
	</aside>
	
	<section>
	<?php
 		include('config.php');
		
		$select="Select title, linktitle FROM articles ";
		
		if (!mysqli_query($dbC,$select)) {
  			die('Error: ' . mysqli_error($dbC)); //Add redirect page if broken
		}
		else{
			$result = mysqli_query($dbC, $select);
			$count = 1;
			echo "<ul>", "\n";
			while($row = mysqli_fetch_array($result)) {
				
				echo "<li><a href='search.php?article={$row['title']}'>
					  {$row['linktitle']}</a></li>", "\n";
				$count++;
				
            }
            echo "</ul>", "\n";
		}
		
		mysqli_close($dbC);
	?>	
	
	<!--<ul>
		<li><a href="search.php?article=8PointModel">8-Point Model</a></li>
		<li><a href="search.php?article=mycleanindia">My Clean India</a></li>
		<li><a href="search.php?article=arorafibers">Arora Fibers</a></li>

	</ul>-->
	</section>
	<br>

</body>
<footer>
	<p>Sharpereturns.com created by Milap Naik and Niral Patel</p>
</footer>
</html>
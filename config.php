<?php
define("DBNAME", "milap_articles");
define("DBUSER", "milap");
define("DBPASS", "test");
define("DBHOST", "localhost");
$dbC = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME)
        or die('Failed to Connect to Database');

?>
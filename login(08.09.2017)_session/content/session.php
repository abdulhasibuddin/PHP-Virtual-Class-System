<?php
	$lifetime = 1800; //Lifetime of the session in seconds (1800sec = 30min)
	$path = "/"; //Give the path on the domain where the cookie will work (/ means the 'root' path)
	$domain = "localhost"; //Give websites domain name
	$secure = false; //Change it to 'true' if you have an 'ssl' connection
	$httponly = true; //Prevents accessing cookie using javascript
?>
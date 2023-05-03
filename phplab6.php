<?php
echo "<h1> refresh page</h1>";
$file = 'count.txt';
$c = file_get_contents($file); //  used to collect form data after submitting an HTML form with method="get".
file_put_contents($file,$c+1); // PUT method is typically used to update data to the server.
echo "the number of users visited :".$c;
?> 

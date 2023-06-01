<?php

$count = file_get_contents("counter.txt");
echo "<h2>Total visitor count:</h2>" . $count;

file_put_contents("counter.txt",$count+1);

?>
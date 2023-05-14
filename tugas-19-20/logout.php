<?php 
session_start();
session_destroy();

echo "Logout success <br>";
echo "<button><a href='index.php'>Home</a></button>"
?>
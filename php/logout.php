<?php
include ('unregisteredNav.php');
session_unset();
session_start();
session_destroy();
echo "<h2>You have been logout!</h2><br> returning to home in 3 sec.";
header("Refresh:3; url=../index.html");

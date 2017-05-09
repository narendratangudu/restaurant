<?php
session_start();
if(isset($_SESSION['id3']) && $_SESSION['username3'] == "delivery")
{
}
else
{

echo "your are not logged in. please login to get the access!";
header("Location: ../index.php");
}
?>
<?php
session_start();
if(isset($_SESSION['id2']) && $_SESSION['username2'] == "kitchen")
{
}
else
{

echo "your are not logged in. please login to get the access!";
header("Location: ../index.php");
}
?>
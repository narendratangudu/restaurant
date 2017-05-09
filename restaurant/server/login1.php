<?php
session_start();
if(isset($_SESSION['id1']) && $_SESSION['username1'] == "server")
{
}
else
{

header("Location: ../index.php");

echo "your are not logged in. please login to get the access!";
}
?>
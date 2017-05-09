<?php
session_start();
if(isset($_SESSION['id4']) && $_SESSION['username4'] == "admin")
{
}
else
{
echo "your are not logged in. please login to get the access!";
header("Location: ../index.php");
}
?>
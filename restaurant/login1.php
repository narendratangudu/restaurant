<?php
session_start();
if(isset($_SESSION['id']))
{
}
else
{
echo "you are not logged in yet.";
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>#restaurant</title>
  <link rel="stylesheet" href="index.css"   media="all"    type="text/css" />
  <style>
   #one {
	border-bottom:3px solid #8B0000;
	}
  div.absolute {
    position: fixed;
    top: 33%;
    left:80%;
    right:32px;
    width: 250px;
    height: 300px;
    border: 3px solid #da1414;
  }
  </style>
</head>
<body>
<?php require_once("navmenu.php"); ?>
<?php require_once('dbconnect.php'); ?>
<div style=" border: 1px solid black;">
  <table heght=100% width="50%" align="center" background="../images/bg4.jpg" >
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <tr><td></td><td><h4><b><u>LOGIN</u></b></h4></td><td></td></tr>
  <tr><td></td><td></td><td></td></tr>
  <tr><td><label for="username">username:</label></td>
  <td><input type="text" name="username" id="username"></td><td></td></tr>

  <tr><td><label for="password">password:</label></td>
  <td><input type="password" name="password" id="password"></td><td></td></tr>
  <tr><td><label for="ROLE">Role:</label></td>
  <td><select name="role" id="role">
      <option value = "server"> server </option>
       <option value = "kitchen"> kitchen </option>
	<option value = "delivery"> delivery </option>
       <option value = "admin"> admin </option> 
    </select> </td><td></td></tr>
 
  <tr><td></td><td><input type="submit" id="login" class="button" value="login" name="login"></td><td></td></tr></table>
  </form>
</div>
<?php
session_start();
if (isset($_POST['login']))
{
if($_POST['username'])
{
$dbusname1 = "server";
$dbusname2 = "kitchen";
$dbusname3 = "delivery";
$dbusname4 = "admin";
$dbpassword1 = "passwordserver";
$dbpassword2 = "passwordkitchen";
$dbpassword3 = "passworddelivery";
$dbpassword4 = "passwordadmin";
$uid1 = "1111";
$uid2 = "2222";
$uid3 = "3333";
$uid4 = "4444";
$usname = strip_tags($_POST["username"]);
$paswd1 = strip_tags($_POST["password"]);
$paswd2 = strip_tags($_POST["role"]);
$paswd = $paswd1 + $paswd2;
if($usname == $dbusname1 && $paswd == $dbPassword1) 
{
$_SESSION['username1'] = $usname;
$_SESSION['id1'] = $uid1;
header("Location: server/index.php");
}
else if($usname == $dbusname2 && $paswd == $dbPassword2) 
{
$_SESSION['username2'] = $usname;
$_SESSION['id2'] = $uid2;
header("Location: kitchen/index.php");
}
else if($usname == $dbusname3 && $paswd == $dbPassword3) 
{
$_SESSION['username3'] = $usname;
$_SESSION['id3'] = $uid3;
header("Location: delivery/index.php");
}
else if($usname == $dbusname4 && $paswd == $dbPassword4) 
{
$_SESSION['username4'] = $usname;
$_SESSION['id4'] = $uid4;
header("Location: admin/index.php");
}
else
{
echo "invalid credintials";
}
}
}
?>

</body>
</html>

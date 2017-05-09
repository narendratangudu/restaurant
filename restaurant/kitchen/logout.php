<?php
session_start();
session_destroy();
if(isset($_SESSION['username2'])){
$msg = "you are now logged out";
}
else
{
$msg = "<h2>could not log you out</h2>";
}
?>
<html>
<body>
<?php echo "$msg"; ?><br>
<p><a href="/restaurant">click here</a> to return to home page</p>
</body>
</html>
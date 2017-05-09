<?php require_once("login1.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <title>#restaurant</title>
  <link rel="stylesheet" href="index.css"   media="all"    type="text/css" />
  <style>
   #one {
	border-bottom:3px solid #8B0000;
	}
  div.scroll{
		width: 100px;
    height: 500px;
		overflow:scroll;
      		}
  </style>
</head>
<body>
<?php require_once("navmenu.php"); ?>
<?php require_once('dbconnect.php'); ?>
<?php
  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  $availability="yes";
 $query = "SELECT * FROM menu WHERE availability='$availability' ";

 $data = mysqli_query($dbc, $query);
 echo "<br><br>";
 echo "<table id=tt4 width=50% border=1 background=../images/bg2.jpg>";
 echo "<thead><tr><td><b>ID</b></td><td><b>NAME</b></td><td><b>DESCRIPTION</b></td><td><b>PRICE</b></td></tr></thead>";
    while($row = mysqli_fetch_array($data))
              {
              echo "<tbody><tr><td>$row[i_id]</td><td>$row[iname]</td><td>$row[disc]</td><td>$row[price]</td></tr><tbody>";    
				   }
 echo "</table>";
?>
<div class=scroll style="position:fixed;width:90%;right:10px;left:450px;top:120px;"><?php require_once('orders.php'); ?></div>

  
</body>
</html>

<?php require_once("login1.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <title>#restaurant-admin</title>
  <link rel="stylesheet" href="index.css"   media="all"    type="text/css" />
  <style>
   #three {
	border-bottom:3px solid #8B0000;
	}
   
   
   table#tt4 {
    border: 1px solid black;
     
    text-align:center;
   }
  
   .button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 4px 2px;
    cursor: pointer;
   }
  </style>
</head>
<body>
<?php require_once("navmenu.php"); ?>
<?php require_once('dbconnect.php'); ?>



<?php
  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$status = 'cancel';
$query = "SELECT * from orders1 where status = '$status'";  

$data = mysqli_query($dbc, $query);
echo "<br><br>";
echo "<table id=tt4 width=100% border=1 background=../images/bg2.jpg>";
echo "<thead><tr><td><b>Order_ID</b></td><td><b>table</b></td><td><b>Order Details</b></td><td><b>Total cost</b></td><td><b>status</b></td><td><b>TimeStamp</b></td></tr></thead>";
    while($row = mysqli_fetch_array($data))
              {
              echo "<tbody><tr><td>$row[o_id]</td><td>$row[tableno]</td><td>$row[list]</td><td>$row[totalcost]</td><td>$row[status]</td><td>$row[ordertime]</td></tr><tbody>";    
				   }
echo "</table>";


?>  
</body>
</html>

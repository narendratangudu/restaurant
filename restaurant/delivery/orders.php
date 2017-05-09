<!DOCTYPE html>
<html>
<head>
  <title>#restaurant-delivery</title>
  <link rel="stylesheet" href="index.css"   media="all"    type="text/css" />
  <style>
   #two {
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

$data = mysqli_query($dbc, $query);
echo "<br><br>";
echo "<table id=tt4 width=100% border=1 background=../images/bg2.jpg>";
echo "<thead><tr><td><b>Name</b></td><td><b>Nearest Place</b></td><td><b>Address</b></td><td><b>Gender</b></td><td><b>DoB</b></td><td><b>Blood Group</b></td><td><b>Contact</b></td></tr></thead>";
    while($row = mysqli_fetch_array($data))
              {
              echo "<tbody><tr><td>$row[pname]</td><td>$row[nearest]</td><td>$row[address]</td><td>$row[gender]</td><td>$row[age]</td><td>$row[bg]</td><td>$row[phone]</td></tr><tbody>";    
				   }
echo "</table>";
echo "<br>If you couldn't find any donors for your search. Please try in other sources listed below.<br>";
}
?>  
</body>
</html>

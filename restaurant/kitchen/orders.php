<?php require_once("login1.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <title>#restaurant-kitchen</title>
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
<table heght=100% width="50%" align="center" background="../images/bg4.jpg" >
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <tr><td></td><td><h4><b><u>UPDATE ORDER STATUS</u></b></h4></td><td></td></tr>
  <tr><td></td><td></td><td></td></tr>
  <tr><td><label for="o_id">Order ID:</label></td>
  <td><input type="text" name="o_id" id="o_id"></td><td></td></tr>  
  <tr><td><label for="status">Status:</label></td>
  <td><select name="status" id="status">
      <option value = "kitchen"> kitchen </option>
      <option value = "ready_to_deliver"> ready to deliver </option>
      <option value = "cancel"> cancel </option>
      </select> </td><td></td></tr>

  <tr><td></td><td><input type="submit" id="update" class="button" value="update" name="update"></td><td></td></tr></table>
  </form>
<?php
 
  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (isset($_POST['update'])) {
     $o_id = mysqli_real_escape_string($dbc, trim($_POST['o_id']));
     $status1 = mysqli_real_escape_string($dbc, trim($_POST['status']));

 $query3 = "UPDATE orders1 SET status='$status1' WHERE o_id='$o_id'";
 mysqli_query($dbc, $query3);
    }  


$status = 'kitchen';
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

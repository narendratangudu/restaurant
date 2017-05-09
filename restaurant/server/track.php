<?php require_once("login1.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <title>#restaurant-server</title>
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
  <tr><td></td><td><h4><b><u>TRACK ORDER STATUS</u></b></h4></td><td></td></tr>
  <tr><td></td><td></td><td></td></tr>
  <tr><td><label for="o_id">Order ID:</label></td>
  <td><input type="text" name="o_id" id="o_id"></td><td></td></tr>  
  <tr><td></td><td><input type="submit" id="track" class="button" value="track" name="track"></td><td></td></tr></table>
  </form>
<table heght=100% width="50%" align="center" background="../images/bg4.jpg" >
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <tr><td></td><td><h4><b><u>CANCEL ORDER</u></b></h4></td><td></td></tr>
  <tr><td></td><td></td><td></td></tr>
  <tr><td><label for="o_id">Order ID:</label></td>
  <td><input type="text" name="o_id" id="o_id"></td><td></td></tr>  
  <tr><td></td><td><input type="submit" id="cancel" class="button" value="cancel" name="cancel"></td><td></td></tr></table>
  </form>

<?php
 
  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (isset($_POST['track'])) {
     $o_id = mysqli_real_escape_string($dbc, trim($_POST['o_id']));
 $query3 = "SELECT status FROM orders1 WHERE o_id='$o_id'";
 $tracking = mysqli_query($dbc, $query3);
 $result = mysqli_fetch_row($tracking);
 echo "your order is (at) $result[0].";

   }  
if (isset($_POST['cancel'])) {
     $o_id = mysqli_real_escape_string($dbc, trim($_POST['o_id']));
     $status1 = "cancel";

 $query3 = "UPDATE orders1 SET status='$status1' WHERE o_id='$o_id'";
 mysqli_query($dbc, $query3);
 echo "your order cancelled!";
    }  

?>
</body>
</html>

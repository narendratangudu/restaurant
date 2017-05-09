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
  <table heght=100% width="50%" align="center" background="../images/bg4.jpg" >
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <tr><td></td><td><h4><b><u>ADD ITEM TO MENU</u></b></h4></td><td></td></tr>
  <tr><td></td><td></td><td></td></tr>
  <tr><td><label for="iname">Name:</label></td>
  <td><input type="text" name="iname" id="iname"></td><td></td></tr>

  <tr><td><label for="disc">Description:</label></td>
  <td><input type="text" name="disc" id="disc"></td><td></td></tr>

  <tr><td><label for="price">price:</label></td>
  <td><input type="text" name="price" id="price"></td><td></td></tr>
  
  <tr><td><label for="availability">availability:</label></td>
  <td><select name="availability" id="availability">
      <option value = "yes"> yes </option>
       <option value = "no"> no </option>
     </select> </td><td></td></tr>

  <tr><td></td><td><input type="submit" id="submit" class="button" value="SUBMIT" name="submit"></td><td></td></tr></table>
  </form>

<table heght=100% width="50%" align="center" background="../images/bg4.jpg" >
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <tr><td></td><td><h4><b><u>UPDATE AVAILABILITY</u></b></h4></td><td></td></tr>
  <tr><td></td><td></td><td></td></tr>
  <tr><td><label for="i_id">Item ID:</label></td>
  <td><input type="text" name="i_id" id="i_id"></td><td></td></tr>  
  <tr><td><label for="availability">availability:</label></td>
  <td><select name="availability" id="availability">
      <option value = "yes"> yes </option>
       <option value = "no"> no </option>
     </select> </td><td></td></tr>

  <tr><td></td><td><input type="submit" id="update" class="button" value="update" name="update"></td><td></td></tr></table>
  </form>

<?php
  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if (isset($_POST['submit'])) {
     $iname = mysqli_real_escape_string($dbc, trim($_POST['iname']));
     $disc = mysqli_real_escape_string($dbc, trim($_POST['disc']));
     $price = mysqli_real_escape_string($dbc, trim($_POST['price']));
     $availability = mysqli_real_escape_string($dbc, trim($_POST['availability']));

 $query = "INSERT INTO menu (iname, disc, price, availability) VALUES ('$iname', '$disc', '$price', '$availability')";
 mysqli_query($dbc, $query);
    }  
  
    if (isset($_POST['update'])) {
     $i_id = mysqli_real_escape_string($dbc, trim($_POST['i_id']));
     $availability = mysqli_real_escape_string($dbc, trim($_POST['availability']));

 $query = "UPDATE menu SET availability='$availability' WHERE i_id='$i_id'";
 mysqli_query($dbc, $query);
    }  

 $query = "SELECT * FROM menu WHERE 1 ";

 $data = mysqli_query($dbc, $query);
 echo "<br><br>";
 echo "<table id=tt4 width=100% border=1 background=../images/bg2.jpg>";
 echo "<thead><tr><td><b>ID</b></td><td><b>NAME</b></td><td><b>DISCRIPTION</b></td><td><b>PRICE</b></td><td><b>AVAILABILITY</b></td></tr></thead>";
    while($row = mysqli_fetch_array($data))
              {
              echo "<tbody><tr><td>$row[i_id]</td><td>$row[iname]</td><td>$row[disc]</td><td>$row[price]</td><td>$row[availability]</td></tr><tbody>";    
				   }
 echo "</table>";
exit();
?>

</body>
</html>

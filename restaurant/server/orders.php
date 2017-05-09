
<HTML>
<HEAD>
<TITLE>#restaurant-server</TITLE>
<LINK href="style.css" rel="stylesheet" type="text/css" />
<SCRIPT src="jquery.js"></SCRIPT>
<SCRIPT>
function addMore() {
	$("<DIV>").load("input.php", function() {
			$("#product").append($(this).html());
	});	
}
function deleteRow() {
	$('DIV.product-item').each(function(index, item){
		jQuery(':checkbox', this).each(function () {
            if ($(this).is(':checked')) {
				$(item).remove();
            }
        });
	});
}
</SCRIPT>
</HEAD>
<BODY>
<?php require_once('dbconnect.php'); ?>
<FORM name="frmProduct" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<DIV id="outer">
<DIV id="header">
<table>
<tr><th><center>YOUR ORDER PLEASE..!</center></th></tr>
<tr><td></td><td><DIV class="float-left">&nbsp;</DIV><label for="table">Table :</label><input type="text" name="table" id="table"></td>
<tr><td><DIV class="float-left">&nbsp;</DIV><label for="cname">NAME :</label><input type="text" name="cname" id="cname"></td><td><DIV class="float-left">&nbsp;</DIV><label for="call">CALL :</label><input type="text" name="call" id="call"></td></tr>
<DIV class="btn-action float-clear">
<tr><td><input type="button" name="add_item" value="Add More" onClick="addMore();" /></td>
<td><input type="button" name="del_item" value="Delete" onClick="deleteRow();" /></td>
</DIV>
<DIV class="footer">
<td><input type="submit" name="save" value="Save" /></td>
</DIV>
</tr>
</table>
<table><tr><td>&nbsp</td><td><DIV class="float-left col-heading">Item ID</DIV></td>
<td><DIV class="float-left col-heading">Item Quantity</DIV></td></tr></table>
</DIV>
<DIV id="product">
<?php require_once("input.php") ?>
</DIV>

</DIV>
</form>
</BODY>
</HTML>
<?php
	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if(isset($_POST["save"])) {
		$table = mysqli_real_escape_string($dbc, trim($_POST['table']));
		$cname1 = mysqli_real_escape_string($dbc, trim($_POST['cname']));
		$call1 = mysqli_real_escape_string($dbc, trim($_POST['call']));
		$result = 0;
		$status='kitchen';
		$itemCount = count($_POST["item_name"]);
		$itemValues=0;
		$queryValue = "";
		echo "<br>";
		echo "hello <h3>$cname1($call1)!</h3>";
		echo "<br>";
		echo "your table is <h3>$table</h3> ";
		echo "<br><br><br>";
		echo "<table id=tt4 width=60% border=1 background=../images/bg2.jpg>";
		echo "<tr><td>item ID</td><td>Quantity</td><td>Price</td></tr>";
		for($i=0;$i<$itemCount;$i++) {
			if(!empty($_POST["item_name"][$i]) || !empty($_POST["item_price"][$i])) {
				$itemValues++;
				if($queryValue!="") {
					$queryValue .= ",";
					}
				

				$itemid = $_POST["item_name"][$i];
				$qty = $_POST["item_price"][$i];
				$query1 = "SELECT price FROM menu WHERE i_id = $itemid";
				$query2 = "SELECT iname FROM menu WHERE i_id = $itemid";
				$data1 = mysqli_query($dbc, $query1);
				$data2 = mysqli_query($dbc, $query2);
				$cost = mysqli_fetch_row($data1);
				$name = mysqli_fetch_row($data2);
				$net = $qty * $cost[0];		

			echo "<tr><td>$name[0]</td><td>$qty</td><td>$net</td></tr>";
				$result = $result + $net;
			
				$queryValue .= $_POST["item_name"][$i]."-".$_POST["item_price"][$i];
			}
		}
	echo "</table>";
	echo "<br>";
	 $query = "INSERT INTO orders1 (tableno, list, totalcost, status, ordertime, cname) VALUES ('$table', '$queryValue', '$result', '$status', NOW(), '$cname1')";
	$track = mysqli_query($dbc, $query);
if($track)
{
echo "your order successfully placed..";
echo "<br>";
}
else
{
echo "failed in placing order!";
echo "<br>";
}
	echo "Your total bill is <h1>$result</h1>";
	echo "<br>";
	$query3 = "SELECT MAX(o_id) FROM orders1";
	$data3 = mysqli_query($dbc, $query3);
	$orderid = mysqli_fetch_row($data3);
	echo "track your order using ID <h3>$orderid[0]</h3>";
				
}
		
?>

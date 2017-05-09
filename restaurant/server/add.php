<!DOCTYPE html>
<html>
<head>
  <title>#mybankurblood-Register</title>
  <link rel="stylesheet" href="index.css"   media="all"    type="text/css" />
  <style>
   #three {
	border-bottom:3px solid #8B0000;
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
   
   input[type=text]{
   width:80%;
   border-radius: 4px;
   }
  </style>
</head>
<body>

<?php require_once("navmenu.php"); ?>
<?php require_once('dbconnect.php'); ?>
<?php
  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  if (isset($_POST['submit'])) {
     $pname = mysqli_real_escape_string($dbc, trim($_POST['pname']));
     $phone = mysqli_real_escape_string($dbc, trim($_POST['phone']));
     $email = mysqli_real_escape_string($dbc, trim($_POST['email']));
     $nearest = mysqli_real_escape_string($dbc, trim($_POST['nearest']));
     $addr = mysqli_real_escape_string($dbc, trim($_POST['addr']));
     $gender = mysqli_real_escape_string($dbc, trim($_POST['gender']));
     $bg = mysqli_real_escape_string($dbc, trim($_POST['bg']));
     $age = mysqli_real_escape_string($dbc, trim($_POST['dob']));
     

 $query = "INSERT INTO donor (pname, phone, email, nearest, address, gender, bg, age, joindate) VALUES ('$pname', '$phone', '$email', '$nearest', '$addr', '$gender', '$bg', '$age', NOW())";
 mysqli_query($dbc, $query);
 echo "<br>You are successfully registerd as donor.<br>Thank you for registering!";
exit();
}
?>


  <p id="tweet2">"Donate blood, stay healthy and save life!"</p> <br>

  <table heght=100% width="38%" align="center" background="../images/bg4.jpg" >
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <tr><td></td><td><h4><b><u>REGISTRATION FORM</u></b></h4></td><td></td></tr>
  <tr><td></td><td></td><td></td></tr>
  <tr><td><label for="pname">Name:</label></td>
  <td><input type="text" name="pname" id="pname"></td><td></td></tr>

  <tr><td><label for="phone">Contact Number:</label></td>
  <td><input type="text" name="phone" id="phone"></td><td></td></tr>

  <tr><td><label for="email">Email Address:</label></td>
  <td><input type="text" name="email" id="email"></td><td></td></tr>
  
  <tr><td><label for="nearest town">Nearest town:</label></td>
  <td><select name="nearest" id="nearest">
              <option value = "SRIKAKULAM"> SRIKAKULAM </option>
       <option value = "ICHAPURAM"> ICHAPURAM </option>
       <option value = "PALASA"> PALASA </option>
       <option value = "SOMPETA"> SOMPETA </option>
       <option value = "NIVIGAM"> NIVIGAM </option>
       <option value = "RAJAM"> RAJAM </option>
       <option value = "TEKKALI"> TEKKALI </option>
       <option value = "HIRAMANDALAM"> HIRAMANDALAM </option>
       <option value = "NARASANNAPETA"> NARASANNAPETA </option>
       <option value = "VIZIANAGARAM"> VIZIANAGARAM </option>
       <option value = "SALURU"> SALURU </option>
       <option value = "BOBBILI"> BOBBILI </option>
       <option value = "PARVATHIPURAM"> PARVATHIPURAM </option>
       <option value = "SRUNGAVARAPUKOTA"> SRUNGAVARAPUKOTA </option>
       <option value = "VISHAKAPATNAM"> VISHAKAPATNAM </option>
       <option value = "GAJUWAKA"> GAJUWAKA </option>
       <option value = "NARSIPATNAM"> NARSIPATNAM </option>
       <option value = "ARAKU"> ARAKU </option>
       <option value = "ANAKAPALLI"> ANAKAPALLI </option>
       <option value = "ELAMANCHALI"> ELAMANCHALI </option>
       <option value = "TUNI"> TUNI </option>
       <option value = "ANNAVARAM"> ANNAVARAM </option>
       <option value = "SAMARLAKOTA"> SAMARLAKOTA </option>
       <option value = "KAKINADA"> KAKINADA </option>
       <option value = "RAJAMAHENDRAVARAM"> RAJAMAHENDRAVARAM </option>
       <option value = "AMALAPURAM"> AMALAPURAM </option>
       <option value = "RAMACHANDRAPURAM"> RAMACHANDRAPURAM </option>
       <option value = "JAGGAMPETA"> JAGGAMPETA </option>
       <option value = "BHIMAVARAM"> BHIMAVARAM </option>
       <option value = "ELURU"> ELURU </option>
       <option value = "NARASAPURAM"> NARASAPURAM </option>
       <option value = "TADEPALLIGUDEM"> TADEPALLIGUDEM </option>
       <option value = "NIDADAVOLE"> NIDADAVOLE </option>
       <option value = "KAIKALUR"> KAIKALUR </option>
       <option value = "VIJAYAWADA"> VIJAYAWADA </option>
       <option value = "MACHILIPATNAM"> MACHILIPATNAM </option>
       <option value = "GUDIVADA"> GUDIVADA </option>
       <option value = "VUYYURU"> VUYYURU </option>
       <option value = "NUZVID"> NUZVID </option>
       <option value = "GUNTUR"> GUNTUR </option>
       <option value = "BAPATLA"> BAPATLA </option>
       <option value = "TENALI"> TENALI </option>
       <option value = "CHEBROLU"> CHEBROLU </option>
       <option value = "AMARAVATHI"> AMARAVATHI </option>
       <option value = "NARASARAOPET"> NARASARAOPET </option>
       <option value = "NELLORE"> NELLORE </option>
       <option value = "ATMAKUR"> ATMAKUR </option>
       <option value = "GUDUR"> GUDUR </option>
       <option value = "VENKATAGIRI"> VENKATAGIRI </option>
       <option value = "KAVALI"> KAVALI </option>
       <option value = "SULURPETA"> SULURPETA </option>
       <option value = "ONGOLE"> ONGOLE </option>
       <option value = "CHIRALA"> CHIRALA </option>
       <option value = "MARKAPUR"> MARKAPUR </option>
       <option value = "ADDANKI"> ADDANKI </option>
       <option value = "KURNOOL"> KURNOOL </option>
       <option value = "NANDYAL"> NANDYAL </option>
       <option value = "ADONI"> ADONI </option>
       <option value = "YEMMIGANUR"> YEMMIGANUR </option>
       <option value = "DHONE"> DHONE </option>
       <option value = "KADAPA"> KADAPA </option>
       <option value = "LAKKIRADDIPALLI"> LAKKIRADDIPALLI </option>
       <option value = "BADVEL"> BADVEL </option>
       <option value = "PRODDATUR"> PRODDATUR </option>
       <option value = "RAYACHOTI"> RAYACHOTI </option>
       <option value = "MYDUKUR"> MYDUKUR </option>
       <option value = "PULIVENDULA"> PULIVENDULA </option>
       <option value = "CHITTOR"> CHITTOR </option>
       <option value = "TIRUPATHI"> TIRUPATHI </option>
       <option value = "MADANAPALLE"> MADANAPALLE </option>
       <option value = "PUNGANUR"> PUNGANUR </option>
       <option value = "NAHGARI"> NAHGARI </option>
       <option value = "SRIKALAHASTI"> SRIKALAHASTI </option>
       <option value = "ANANTAPUR"> ANANTAPUR </option>
       <option value = "DHARMAVARAM"> DHARMAVARAM </option>
       <option value = "KADIRI"> KADIRI </option>
       <option value = "PENUKONDA"> PENUKONDA </option>
       <option value = "HYDERABAD"> HYDERABAD </option>
       <option value = "SECUNDERABAD"> SECUNDERABAD </option>
       <option value = "WARANGAL"> WARANGAL </option>
       <option value = "NIZAMABAD"> NIZAMABAD </option>
       <option value = "HANUMAKONDA"> HANUMAKONDA </option>
       <option value = "CHENNUR"> CHENNUR </option>
       <option value = "ADILABAD"> ADILABAD </option>
       <option value = "MANCHERIAL"> MANCHERIAL </option>
       <option value = "BHAINSA"> BHAINSA </option>
       <option value = "KANAPUR"> KANAPUR </option>
       <option value = "YELLAREDDY"> YELLAREDDY </option>
       <option value = "DICHPALLI"> DICHPALLI </option>
       <option value = "KAMAREDDY"> KAMAREDDY </option>
	<option value = "MAHBUBUNAGAR"> MAHBUBUNAGAR </option>
	<option value = "JADCHERLA"> JADCHERLA </option>
	<option value = "GADWAL"> GADWAL </option>
	<option value = "KOLLAPUR"> KOLLAPUR </option>
	<option value = "MEDAK"> MEDAK </option>
	<option value = "SIDDIPET"> SIDDIPET </option>
	<option value = "NARAYANKHED"> NARAYANKHED </option>
	<option value = "IBRAHIMPATNAM"> IBRAHIMPATNAM </option>
	<option value = "MEDCHAL"> MEDCHAL </option>
	<option value = "VIKARABAD"> VIKARABAD </option>
	<option value = "KARIMNAGAR"> KARIMNAGAR </option>
	<option value = "MYDARAM"> MYDARAM </option>
	<option value = "BUGGARAM"> BUGGARAM </option>
	<option value = "KHAMMAM"> KHAMMAM </option>
	<option value = "BHADRACHALAM"> BHADRACHALAM </option>
	<option value = "SATHUPALLI"> SATHUPALLI </option>
	<option value = "NALGONDA"> NALGONDA </option>
	<option value = "SURYAPET"> SURYAPET </option>
	<option value = "MIRYALGUDA"> MIRYALGUDA </option>
	<option value = "CHALAKURTHI"> CHALAKURTHI </option>
	
      </select> </td><td></td></tr>

  <tr><td><label for="addr">Address:</label></td>
  <td><textarea id="addr" name="addr"></textarea></td><td></td></tr>

  <tr><td><label for="gender">Gender:</label></td>
  <td><select name="gender" id="gender">
       <option value = "Male"> Male </option>
       <option value = "Female"> Female </option>
      </select> </td><td></td></tr>
  
  <tr><td><label for="blood group">Bood group:</label></td>
  <td><select name="bg" id="bg">
      <option value = "A+"> A+ </option>
       <option value = "A-"> A- </option>
       <option value = "A1+"> A1+ </option>
       <option value = "A1-"> A1- </option>
       <option value = "A2+"> A2+ </option>
       <option value = "A2-"> A2- </option>
       <option value = "A1B+"> A1B+ </option>
       <option value = "A1B-"> A1B- </option>
       <option value = "A2B+"> A2B+ </option>
       <option value = "A2B-"> A2B- </option>
       <option value = "AB+"> AB+ </option>
       <option value = "AB-"> AB- </option>
       <option value = "B+"> B+ </option>
       <option value = "B-"> B- </option>
       <option value = "BOMBAY"> BOMBAY </option>
       <option value = "INRA"> INRA </option>
       <option value = "O+"> O+ </option>
       <option value = "O-"> O- </option>
      </select> </td><td></td></tr>

  <tr><td><label for="dob">Date Of Birth:</label></td>
  <td><input type="date" data-date-inline-picker="true" name="dob" id="dob"></td><td></td></tr>


  <tr><td></td><td><input type="submit" id="submit" class="button" value="SUBMIT" name="submit"></td><td></td></tr></table>
  </form>

</body>
</html>

<?php
// Start the session
session_start();
?>

<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#004894">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#004894">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#004894">
	<title>Cultural Events | Excelsior 2017</title>
	<meta name="description" content="Cultural events of Excelsior 2017" />
	<meta name="keywords" content="Excelsior 2017, annual, cultural, JCE, dive, feel, come alive, underwater, events, Cultural, fashion show, Choreo Nite, StreetX"
	/>
	<meta name="author" content="Rajnarayan | Excelsior web team" />
	<link rel="shortcut icon" href="favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700|Abril+Fatface" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/demo_eventdet.css" />
	<link rel="stylesheet" type="text/css" href="css/component_eventdet.css" />
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/evently.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/register.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	<style>
		.navig:hover {
			font-size: 1.2em !important;
			transform: scale(1.2, 1.2);
			-moz-transform: scale(1.2, 1.2);
			-o-transform: scale(1.2, 1.2);
			-webkit-transform: scale(1.2, 1.2);
			transition: 0.3s;
		}
	</style>
	<script src="js/eventdetails.js"></script>
	<script src="https://www.gstatic.com/firebasejs/3.6.9/firebase.js"></script>
	<link rel="stylesheet" type="text/css" href="css/linkstyler.css" />
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	
	
<style>
body {
  font-size:'180',face='Arial';
  color:#FFF;
}
</style>
</head>
<body>
<?php
$cn=mysqli_connect("localhost","id895454_root","excelsior","id895454_details");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


if(isset($_POST['Register']))
	{
		
$your_name = mysqli_real_escape_string($cn, $_POST['your-name']);

$your_email = mysqli_real_escape_string($cn, $_POST['your-email']);
$your_dept = mysqli_real_escape_string($cn, $_POST['your-dept']);
$_SESSION["email"] = $your_email;
$phone = mysqli_real_escape_string($cn, $_POST['phone']);
$event = mysqli_real_escape_string($cn, $_POST['event']);
$check="SELECT * FROM students WHERE email = '$your_email' AND event = '$event'";
$rs = mysqli_query($cn,$check);
$data = mysqli_fetch_array($rs, MYSQLI_NUM);
if($data[0] > 1)
{
    echo "User Already in Exists for this event<br/>";
}
else{
if(1)
{
echo "Registration closed for this event";
}
else{
$sql = "INSERT INTO students(name,email,phone,dept,event) VALUES ('$your_name','$your_email','$phone','$your_dept','$event')";
$results= mysqli_query($cn,$sql);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


if($results)
{
$sqll = "SELECT id FROM students WHERE email= '$your_email' AND event = '$event'";
$result = mysqli_query($cn, $sqll);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		
		//echo "<div align='center'></div>";?>
<div style="text-align: center; color:#f1f442;"> <h3> Your RegID = <?php echo $row["id"] ?></h3></div>
<?php     
    
	  if($event=='Rangoli'){
	?>

	<br>
	<div class="register-form">
	enter other team members name and department
<form action="Database1.php" method="post" style="color: black" id="regForm">


<input type="hidden"  readonly name="event" value="Rangoli"/>

						<table>
						<tr>
						<td>
						<div>
		      				  <label for="name">
		      					<span class="required">Name:</span>
									<input type="text"  name="name1" id="name1" placeholder="Member Name"  tabindex="1" autofocus="autofocus"/></br>
		      				  </label>
								</td>
							</div>
							<td>
							<div>
		      				  <label for="name">
							  <span class="required">Department: *</span> <br>
		      					 <select name="your-dept1">
  <option name="your-dept1" >BME</option>
  <option name="your-dept1" >Civil</option>
  <option name="your-dept1" >CSE</option>
  <option name="your-dept1" >ECE</option>
    <option name="your-dept1" >EEE</option>
	  <option name="your-dept1" >E&&I</option>
	    <option name="your-dept1" >IT</option>
		<option name="your-dept1" >MBA</option>
		<option name="your-dept1" >MCA</option>
  
</select>
<br>
<br>
</label> 
							</div>
							</td>
							</tr>
							<tr>
						<td>
							<div>
		      				  <label for="name">
		      					<span class="required">Name:</span> 
									<input type="text" maxlength="15" name="name2" id="name2" placeholder="Member Name"  tabindex="1" autofocus="autofocus"/></br>
		      				  </label> 
							</div>
						</td>
						<td>
	<div>
		      				  <label for="name">
							  <span class="required">Department: *</span> <br>
		      					 <select name="your-dept2">
  <option name="your-dept2" >BME</option>
  <option name="your-dept2" >Civil</option>
  <option name="your-dept2" >CSE</option>
  <option name="your-dept2" >ECE</option>
    <option name="your-dept2" >EEE</option>
	  <option name="your-dept2" >E&&I</option>
	    <option name="your-dept2" >IT</option>
		<option name="your-dept2" >MBA</option>
		<option name="your-dept2" >MCA</option>
		
  
</select>
<br>
<br>
</label> 
							</div>
								</td>
								</tr>
								<tr>
						<td>
							<div>
		      				  <label for="name">
		      					<span class="required">Name:</span> 
									<input type="text" maxlength="15" name="name3" id="name" placeholder="Member Name"  tabindex="1" autofocus="autofocus"/></br>
		      				  </label> 
							</div>
						</td>
						<td>
	<div>
		      				  <label for="name">
							  <span class="required">Department: *</span> <br>
		      					 <select name="your-dept3">
  <option name="your-dept3" >BME</option>
  <option name="your-dept3" >Civil</option>
  <option name="your-dept3" >CSE</option>
  <option name="your-dept3" >ECE</option>
    <option name="your-dept3" >EEE</option>
	  <option name="your-dept3" >E&&I</option>
	    <option name="your-dept3" >IT</option>
		<option name="your-dept3" >MBA</option>
		<option name="your-dept3" >MCA</option>
		
 
</select>
<br>
<br>
</label> 
							</div>
								</td>
								</tr>
								<tr>
								<td>
							<div>
									<button type="submit" class="submit-form"  name="Register1" value="Register1">Register</button> 
							</div>
							</tr>
							</td>
							</table>
							</form>
							</div>
							
<?php }
 if($event=='Channel Surfing'){
	?>
	<br>
	<div class="register-form">
	enter other team members name and department
<form action="Database1.php" method="post" style="color: black" id="regForm">

<input type="hidden"  readonly name="event" value="Channel Surfing"/>
						<table>
						<tr>
						<td>
						<div>
		      				  <label for="name">
		      					<span class="required">Name:</span>
									<input type="text"  name="name1" id="name1" placeholder="Member Name"  tabindex="1" autofocus="autofocus"/></br>
		      				  </label>
								</td>
							</div>
							<td>
							<div>
		      				  <label for="name">
							  <span class="required">Department: *</span> <br>
		      					 <select name="your-dept1">
  <option name="your-dept1" >BME</option>
  <option name="your-dept1" >Civil</option>
  <option name="your-dept1" >CSE</option>
  <option name="your-dept1" >ECE</option>
    <option name="your-dept1" >EEE</option>
	  <option name="your-dept1" >E&&I</option>
	    <option name="your-dept1" >IT</option>
		<option name="your-dept1" >MBA</option>
		<option name="your-dept1" >MCA</option>
  
</select>
<br>
<br>
</label> 
							</div>
							</td>
							</tr>
							<tr>
						<td>
							<div>
		      				  <label for="name">
		      					<span class="required">Name:</span> 
									<input type="text" maxlength="15" name="name2" id="name2" placeholder="Member Name"  tabindex="1" autofocus="autofocus"/></br>
		      				  </label> 
							</div>
						</td>
						<td>
	<div>
		      				  <label for="name">
							  <span class="required">Department: *</span> <br>
		      					 <select name="your-dept2">
  <option name="your-dept2" >BME</option>
  <option name="your-dept2" >Civil</option>
  <option name="your-dept2" >CSE</option>
  <option name="your-dept2" >ECE</option>
    <option name="your-dept2" >EEE</option>
	  <option name="your-dept2" >E&&I</option>
	    <option name="your-dept2" >IT</option>
		<option name="your-dept2" >MBA</option>
		<option name="your-dept2" >MCA</option>
		
  
</select>
<br>
<br>
</label> 
							</div>
								</td>
								</tr>
								<tr>
						<td>
							<div>
		      				  <label for="name">
		      					<span class="required">Name:</span> 
									<input type="text" maxlength="15" name="name3" id="name" placeholder="Member Name"  tabindex="1" autofocus="autofocus"/></br>
		      				  </label> 
							</div>
						</td>
						<td>
	<div>
		      				  <label for="name">
							  <span class="required">Department: *</span> <br>
		      					 <select name="your-dept3">
  <option name="your-dept3" >BME</option>
  <option name="your-dept3" >Civil</option>
  <option name="your-dept3" >CSE</option>
  <option name="your-dept3" >ECE</option>
    <option name="your-dept3" >EEE</option>
	  <option name="your-dept3" >E&&I</option>
	    <option name="your-dept3" >IT</option>
		<option name="your-dept3" >MBA</option>
		<option name="your-dept3" >MCA</option>
		
 
</select>
<br>
<br>
</label> 
							</div>
								</td>
								</tr>
								<tr>
								<td>
							<div>
									<button type="submit" class="submit-form"  name="Register2" value="Register2">Register</button> 
							</div>
							</tr>
							</td>
							</table>
							</form>
							</div>
							
<?php }
if($event=='Cookery'){
	?>
	<br>
	<div class="register-form">
	Enter other team members name and department
<form action="Database1.php" method="post" style="color: black" id="regForm">

<input type="hidden"  readonly name="event" value="Cookery"/>
						<table>
						<tr>
						<td>
						<div>
		      				  <label for="name">
		      					<span class="required">Name:</span>
									<input type="text"  name="name1" id="name1" placeholder="Member Name"  tabindex="1" autofocus="autofocus"/></br>
		      				  </label>
								</td>
							</div>
							<td>
							<div>
		      				  <label for="name">
							  <span class="required">Department: *</span> <br>
		      					 <select name="your-dept1">
  <option name="your-dept1" >BME</option>
  <option name="your-dept1" >Civil</option>
  <option name="your-dept1" >CSE</option>
  <option name="your-dept1" >ECE</option>
    <option name="your-dept1" >EEE</option>
	  <option name="your-dept1" >E&&I</option>
	    <option name="your-dept1" >IT</option>
		<option name="your-dept1" >MBA</option>
		<option name="your-dept1" >MCA</option>
  
</select>
<br>
<br>
</label> 
							</div>
							</td>
							</tr>
							<tr>
						<td>
							<div>
		      				  <label for="name">
		      					<span class="required">Name:</span> 
									<input type="text" maxlength="15" name="name2" id="name" placeholder="Member Name"  tabindex="1" autofocus="autofocus"/></br>
		      				  </label> 
							</div>
						</td>
						<td>
	<div>
		      				  <label for="name">
							  <span class="required">Department: *</span> <br>
		      					 <select name="your-dept2">
  <option name="your-dept2" >BME</option>
  <option name="your-dept2" >Civil</option>
  <option name="your-dept2" >CSE</option>
  <option name="your-dept2" >ECE</option>
    <option name="your-dept2" >EEE</option>
	  <option name="your-dept2" >E&&I</option>
	    <option name="your-dept2" >IT</option>
		<option name="your-dept2" >MBA</option>
		<option name="your-dept2" >MCA</option>
		
  
</select>
<br>
<br>
</label> 
							</div>
								</td>
								</tr>
								<tr>
								<td>
							<div>
									<button type="submit" class="submit-form"  name="Register3" value="Register3">Register</button> 
							</div>
							</td>
							</tr>
							</table>
							</form>
							</div>
							
							
<?php }
if($event=='Face painting'){
	?>
	<br>
	<div class="register-form">
	enter other team members name and department
<form action="Database1.php" method="post" style="color: black" id="regForm">

<input type="hidden"  readonly name="event" value="Face painting"/>
						<table>
						<tr>
						<td>
						<div>
		      				  <label for="name">
		      					<span class="required">Name:</span>
									<input type="text"  name="name1" id="name1" placeholder="Member Name"  tabindex="1" autofocus="autofocus"/></br>
		      				  </label>
								</td>
							</div>
							<td>
							<div>
		      				  <label for="name">
							  <span class="required">Department: *</span> <br>
		      					 <select name="your-dept1">
  <option name="your-dept1" >BME</option>
  <option name="your-dept1" >Civil</option>
  <option name="your-dept1" >CSE</option>
  <option name="your-dept1" >ECE</option>
    <option name="your-dept1" >EEE</option>
	  <option name="your-dept1" >E&&I</option>
	    <option name="your-dept1" >IT</option>
		<option name="your-dept1" >MBA</option>
		<option name="your-dept1" >MCA</option>
  
</select>
<br>
<br>
</label> 
							</div>
							</td>
							</tr>
							
								<tr>
								<td>
							<div>
									<button type="submit" class="submit-form"  name="Register4" value="Register4">Register</button> 
							</div>
							</td>
							</tr>
							</table>
							</form>
							</div>
							
							
<?php }
if($event=='Dual Dance'){
	?>
	<br>
	<div class="register-form">
	enter other team members name and department
<form action="Database1.php" method="post" style="color: black" id="regForm">

<input type="hidden"  readonly name="event" value="Dual Dance"/>
						<table>
						<tr>
						<td>
						<div>
		      				  <label for="name">
		      					<span class="required">Name:</span>
									<input type="text"  name="name1" id="name1" placeholder="Member Name"  tabindex="1" autofocus="autofocus"/></br>
		      				  </label>
								</td>
							</div>
							<td>
							<div>
		      				  <label for="name">
							  <span class="required">Department: *</span> <br>
		      					 <select name="your-dept1">
  <option name="your-dept1" >BME</option>
  <option name="your-dept1" >Civil</option>
  <option name="your-dept1" >CSE</option>
  <option name="your-dept1" >ECE</option>
    <option name="your-dept1" >EEE</option>
	  <option name="your-dept1" >E&&I</option>
	    <option name="your-dept1" >IT</option>
		<option name="your-dept1" >MBA</option>
		<option name="your-dept1" >MCA</option>
  
</select>
<br>
<br>
</label> 
							</div>
							</td>
							</tr>
							
								<tr>
								<td>
							<div>
									<button type="submit" class="submit-form"  name="Register5" value="Register5">Register</button> 
							</div>
							</td>
							</tr>
							</table>
							</form>
							</div>
							
							
<?php }
if($event=='Group Dance'){
	?>
	<br>
	<div class="register-form">
	enter other team members name and department
<form action="Database1.php" method="post" style="color: black" id="regForm">

<input type="hidden"  readonly name="event" value="Group Dance"/>
						<table>
						<tr>
						<td>
						<div>
		      				  <label for="name">
		      					<span class="required">Name:</span>
									<input type="text"  name="name1" id="name1" placeholder="Member Name"  tabindex="1" autofocus="autofocus"/></br>
		      				  </label>
								</td>
							</div>
							<td>
							<div>
		      				  <label for="name">
							  <span class="required">Department: *</span> <br>
		      					 <select name="your-dept1">
  <option name="your-dept1" >BME</option>
  <option name="your-dept1" >Civil</option>
  <option name="your-dept1" >CSE</option>
  <option name="your-dept1" >ECE</option>
    <option name="your-dept1" >EEE</option>
	  <option name="your-dept1" >E&&I</option>
	    <option name="your-dept1" >IT</option>
		<option name="your-dept1" >MBA</option>
		<option name="your-dept1" >MCA</option>
  
</select>
<br>
<br>
</label> 
							</div>
							</td>
							</tr>
							<tr>
						<td>
							<div>
		      				  <label for="name">
		      					<span class="required">Name:</span> 
									<input type="text" maxlength="15" name="name2" id="name2" placeholder="Member Name"  tabindex="1" autofocus="autofocus"/></br>
		      				  </label> 
							</div>
						</td>
						<td>
	<div>
		      				  <label for="name">
							  <span class="required">Department: *</span> <br>
		      					 <select name="your-dept2">
  <option name="your-dept2" >BME</option>
  <option name="your-dept2" >Civil</option>
  <option name="your-dept2" >CSE</option>
  <option name="your-dept2" >ECE</option>
    <option name="your-dept2" >EEE</option>
	  <option name="your-dept2" >E&&I</option>
	    <option name="your-dept2" >IT</option>
		<option name="your-dept2" >MBA</option>
		<option name="your-dept2" >MCA</option>
		
  
</select>
<br>
<br>
</label> 
							</div>
								</td>
								</tr>
								<tr>
						<td>
							<div>
		      				  <label for="name">
		      					<span class="required">Name:</span> 
									<input type="text" maxlength="15" name="name3" id="name" placeholder="Member Name"  tabindex="1" autofocus="autofocus"/></br>
		      				  </label> 
							</div>
						</td>
						<td>
	<div>
		      				  <label for="name">
							  <span class="required">Department: *</span> <br>
		      					 <select name="your-dept3">
  <option name="your-dept3" >BME</option>
  <option name="your-dept3" >Civil</option>
  <option name="your-dept3" >CSE</option>
  <option name="your-dept3" >ECE</option>
    <option name="your-dept3" >EEE</option>
	  <option name="your-dept3" >E&&I</option>
	    <option name="your-dept3" >IT</option>
		<option name="your-dept3" >MBA</option>
		<option name="your-dept3" >MCA</option>
		
 
</select>
<br>
<br>
</label> 
							</div>
								</td>
								</tr>
<tr>
						<td>
						<div>
		      				  <label for="name">
		      					<span class="required">Name:</span>
									<input type="text"  name="name4" id="name1" placeholder="Member Name"  tabindex="1" autofocus="autofocus"/></br>
		      				  </label>
								</td>
							</div>
							<td>
							<div>
		      				  <label for="name">
							  <span class="required">Department: *</span> <br>
		      					 <select name="your-dept4">
  <option name="your-dept4" >BME</option>
  <option name="your-dept4" >Civil</option>
  <option name="your-dept4" >CSE</option>
  <option name="your-dept4" >ECE</option>
    <option name="your-dept4" >EEE</option>
	  <option name="your-dept4" >E&&I</option>
	    <option name="your-dept4" >IT</option>
		<option name="your-dept4" >MBA</option>
		<option name="your-dept4" >MCA</option>
  
</select>
<br>
<br>
</label> 
							</div>
							</td>
							</tr><tr>
						<td>
						<div>
		      				  <label for="name">
		      					<span class="required">Name:</span>
									<input type="text"  name="name5" id="name1" placeholder="Member Name"  tabindex="1" autofocus="autofocus"/></br>
		      				  </label>
								</td>
							</div>
							<td>
							<div>
		      				  <label for="name">
							  <span class="required">Department: *</span> <br>
		      					 <select name="your-dept5">
  <option name="your-dept5" >BME</option>
  <option name="your-dept5" >Civil</option>
  <option name="your-dept5" >CSE</option>
  <option name="your-dept5" >ECE</option>
    <option name="your-dept5" >EEE</option>
	  <option name="your-dept5" >E&&I</option>
	    <option name="your-dept5" >IT</option>
		<option name="your-dept5" >MBA</option>
		<option name="your-dept5" >MCA</option>
  
</select>
<br>
<br>
</label> 
							</div>
							</td>
							</tr><tr>
						<td>
						<div>
		      				  <label for="name">
		      					<span class="required">Name:</span>
									<input type="text"  name="name6" id="name1" placeholder="Member Name"  tabindex="1" autofocus="autofocus"/></br>
		      				  </label>
								</td>
							</div>
							<td>
							<div>
		      				  <label for="name">
							  <span class="required">Department: *</span> <br>
		      					 <select name="your-dept6">
  <option name="your-dept6" >BME</option>
  <option name="your-dept6" >Civil</option>
  <option name="your-dept6" >CSE</option>
  <option name="your-dept6" >ECE</option>
    <option name="your-dept6" >EEE</option>
	  <option name="your-dept6" >E&&I</option>
	    <option name="your-dept6" >IT</option>
		<option name="your-dept6" >MBA</option>
		<option name="your-dept6" >MCA</option>
  
</select>
<br>
<br>
</label> 
							</div>
							</td>
							</tr><tr>
						<td>
						<div>
		      				  <label for="name">
		      					<span class="required">Name:</span>
									<input type="text"  name="name7" id="name1" placeholder="Member Name"  tabindex="1" autofocus="autofocus"/></br>
		      				  </label>
								</td>
							</div>
							<td>
							<div>
		      				  <label for="name">
							  <span class="required">Department: *</span> <br>
		      					 <select name="your-dept7">
  <option name="your-dept7" >BME</option>
  <option name="your-dept7" >Civil</option>
  <option name="your-dept7" >CSE</option>
  <option name="your-dept7" >ECE</option>
    <option name="your-dept7" >EEE</option>
	  <option name="your-dept7" >E&&I</option>
	    <option name="your-dept7" >IT</option>
		<option name="your-dept7" >MBA</option>
		<option name="your-dept7" >MCA</option>
  
</select>
<br>
<br>
</label> 
							</div>
							</td>
							</tr><tr>
						<td>
						<div>
		      				  <label for="name">
		      					<span class="required">Name:</span>
									<input type="text"  name="name8" id="name1" placeholder="Member Name"  tabindex="1" autofocus="autofocus"/></br>
		      				  </label>
								</td>
							</div>
							<td>
							<div>
		      				  <label for="name">
							  <span class="required">Department: *</span> <br>
		      					 <select name="your-dept8">
  <option name="your-dept8" >BME</option>
  <option name="your-dept8" >Civil</option>
  <option name="your-dept8" >CSE</option>
  <option name="your-dept8" >ECE</option>
    <option name="your-dept8" >EEE</option>
	  <option name="your-dept8" >E&&I</option>
	    <option name="your-dept8" >IT</option>
		<option name="your-dept8" >MBA</option>
		<option name="your-dept8" >MCA</option>
  
</select>
<br>
<br>
</label> 
							</div>
							</td>
							</tr><tr>
						<td>
						<div>
		      				  <label for="name">
		      					<span class="required">Name:</span>
									<input type="text"  name="name" id="name9" placeholder="Member Name"  tabindex="1" autofocus="autofocus"/></br>
		      				  </label>
								</td>
							</div>
							<td>
							<div>
		      				  <label for="name">
							  <span class="required">Department: *</span> <br>
		      					 <select name="your-dept9">
  <option name="your-dept9" >BME</option>
  <option name="your-dept9" >Civil</option>
  <option name="your-dept9" >CSE</option>
  <option name="your-dept9" >ECE</option>
    <option name="your-dept9" >EEE</option>
	  <option name="your-dept9" >E&&I</option>
	    <option name="your-dept9" >IT</option>
		<option name="your-dept9" >MBA</option>
		<option name="your-dept9" >MCA</option>
  
</select>
<br>
<br>
</label> 
							</div>
							</td>
							</tr><tr>
						<td>
						<div>
		      				  <label for="name">
		      					<span class="required">Name:</span>
									<input type="text"  name="name10" id="name1" placeholder="Member Name"  tabindex="1" autofocus="autofocus"/></br>
		      				  </label>
								</td>
							</div>
							<td>
							<div>
		      				  <label for="name">
							  <span class="required">Department: *</span> <br>
		      					 <select name="your-dept10">
  <option name="your-dept10" >BME</option>
  <option name="your-dept10" >Civil</option>
  <option name="your-dept10" >CSE</option>
  <option name="your-dept10" >ECE</option>
    <option name="your-dept10" >EEE</option>
	  <option name="your-dept10" >E&&I</option>
	    <option name="your-dept10" >IT</option>
		<option name="your-dept10" >MBA</option>
		<option name="your-dept10" >MCA</option>
  
</select>
<br>
<br>
</label> 
							</div>
							</td>
							</tr>
							<tr>
								<td>
							<div>
									<button type="submit" class="submit-form"  name="Register7" value="Register7">Register</button> 
							</div>
							</tr>
							</td>
							</table>
							</form>
							</div>
							
<?php }
if($event=='Variety'){
	?>
	<br>
	<div class="register-form">
	enter other team members name and department
<form action="Database1.php" method="post" style="color: black" id="regForm">
<
<input type="hidden"  readonly name="event" value="Variety"/>
						<table>
						<tr>
						<td>
						<div>
		      				  <label for="name">
		      					<span class="required">Name:</span>
									<input type="text"  name="name1" id="name1" placeholder="Member Name"  tabindex="1" autofocus="autofocus"/></br>
		      				  </label>
								</td>
							</div>
							<td>
							<div>
		      				  <label for="name">
							  <span class="required">Department: *</span> <br>
		      					 <select name="your-dept1">
  <option name="your-dept1" >BME</option>
  <option name="your-dept1" >Civil</option>
  <option name="your-dept1" >CSE</option>
  <option name="your-dept1" >ECE</option>
    <option name="your-dept1" >EEE</option>
	  <option name="your-dept1" >E&&I</option>
	    <option name="your-dept1" >IT</option>
		<option name="your-dept1" >MBA</option>
		<option name="your-dept1" >MCA</option>
  
</select>
<br>
<br>
</label> 
							</div>
							</td>
							</tr>
							<tr>
						<td>
							<div>
		      				  <label for="name">
		      					<span class="required">Name:</span> 
									<input type="text" maxlength="15" name="name2" id="name2" placeholder="Member Name"  tabindex="1" autofocus="autofocus"/></br>
		      				  </label> 
							</div>
						</td>
						<td>
	<div>
		      				  <label for="name">
							  <span class="required">Department: *</span> <br>
		      					 <select name="your-dept2">
  <option name="your-dept2" >BME</option>
  <option name="your-dept2" >Civil</option>
  <option name="your-dept2" >CSE</option>
  <option name="your-dept2" >ECE</option>
    <option name="your-dept2" >EEE</option>
	  <option name="your-dept2" >E&&I</option>
	    <option name="your-dept2" >IT</option>
		<option name="your-dept2" >MBA</option>
		<option name="your-dept2" >MCA</option>
		
  
</select>
<br>
<br>
</label> 
							</div>
								</td>
								</tr>
								<tr>
						<td>
							<div>
		      				  <label for="name">
		      					<span class="required">Name:</span> 
									<input type="text" maxlength="15" name="name3" id="name" placeholder="Member Name"  tabindex="1" autofocus="autofocus"/></br>
		      				  </label> 
							</div>
						</td>
						<td>
	<div>
		      				  <label for="name">
							  <span class="required">Department: *</span> <br>
		      					 <select name="your-dept3">
  <option name="your-dept3" >BME</option>
  <option name="your-dept3" >Civil</option>
  <option name="your-dept3" >CSE</option>
  <option name="your-dept3" >ECE</option>
    <option name="your-dept3" >EEE</option>
	  <option name="your-dept3" >E&&I</option>
	    <option name="your-dept3" >IT</option>
		<option name="your-dept3" >MBA</option>
		<option name="your-dept3" >MCA</option>
		
 
</select>
<br>
<br>
</label> 
							</div>
								</td>
								</tr>
<tr>
						<td>
						<div>
		      				  <label for="name">
		      					<span class="required">Name:</span>
									<input type="text"  name="name4" id="name1" placeholder="Member Name"  tabindex="1" autofocus="autofocus"/></br>
		      				  </label>
								</td>
							</div>
							<td>
							<div>
		      				  <label for="name">
							  <span class="required">Department: *</span> <br>
		      					 <select name="your-dept4">
  <option name="your-dept4" >BME</option>
  <option name="your-dept4" >Civil</option>
  <option name="your-dept4" >CSE</option>
  <option name="your-dept4" >ECE</option>
    <option name="your-dept4" >EEE</option>
	  <option name="your-dept4" >E&&I</option>
	    <option name="your-dept4" >IT</option>
		<option name="your-dept4" >MBA</option>
		<option name="your-dept4" >MCA</option>
  
</select>
<br>
<br>
</label> 
							</div>
							</td>
							</tr><tr>
						<td>
						<div>
		      				  <label for="name">
		      					<span class="required">Name:</span>
									<input type="text"  name="name5" id="name1" placeholder="Member Name"  tabindex="1" autofocus="autofocus"/></br>
		      				  </label>
								</td>
							</div>
							<td>
							<div>
		      				  <label for="name">
							  <span class="required">Department: *</span> <br>
		      					 <select name="your-dept5">
  <option name="your-dept5" >BME</option>
  <option name="your-dept5" >Civil</option>
  <option name="your-dept5" >CSE</option>
  <option name="your-dept5" >ECE</option>
    <option name="your-dept5" >EEE</option>
	  <option name="your-dept5" >E&&I</option>
	    <option name="your-dept5" >IT</option>
		<option name="your-dept5" >MBA</option>
		<option name="your-dept5" >MCA</option>
  
</select>
<br>
<br>
</label> 
							</div>
							</td>
							</tr><tr>
						<td>
						<div>
		      				  <label for="name">
		      					<span class="required">Name:</span>
									<input type="text"  name="name6" id="name1" placeholder="Member Name"  tabindex="1" autofocus="autofocus"/></br>
		      				  </label>
								</td>
							</div>
							<td>
							<div>
		      				  <label for="name">
							  <span class="required">Department: *</span> <br>
		      					 <select name="your-dept6">
  <option name="your-dept6" >BME</option>
  <option name="your-dept6" >Civil</option>
  <option name="your-dept6" >CSE</option>
  <option name="your-dept6" >ECE</option>
    <option name="your-dept6" >EEE</option>
	  <option name="your-dept6" >E&&I</option>
	    <option name="your-dept6" >IT</option>
		<option name="your-dept6" >MBA</option>
		<option name="your-dept6" >MCA</option>
  
</select>
<br>
<br>
</label> 
							</div>
							</td>
							</tr><tr>
						<td>
						<div>
		      				  <label for="name">
		      					<span class="required">Name:</span>
									<input type="text"  name="name7" id="name1" placeholder="Member Name"  tabindex="1" autofocus="autofocus"/></br>
		      				  </label>
								</td>
							</div>
							<td>
							<div>
		      				  <label for="name">
							  <span class="required">Department: *</span> <br>
		      					 <select name="your-dept7">
  <option name="your-dept7" >BME</option>
  <option name="your-dept7" >Civil</option>
  <option name="your-dept7" >CSE</option>
  <option name="your-dept7" >ECE</option>
    <option name="your-dept7" >EEE</option>
	  <option name="your-dept7" >E&&I</option>
	    <option name="your-dept7" >IT</option>
		<option name="your-dept7" >MBA</option>
		<option name="your-dept7" >MCA</option>
  
</select>
<br>
<br>
</label> 
							</div>
							</td>
							</tr><tr>
						<td>
						<div>
		      				  <label for="name">
		      					<span class="required">Name:</span>
									<input type="text"  name="name8" id="name1" placeholder="Member Name"  tabindex="1" autofocus="autofocus"/></br>
		      				  </label>
								</td>
							</div>
							<td>
							<div>
		      				  <label for="name">
							  <span class="required">Department: *</span> <br>
		      					 <select name="your-dept8">
  <option name="your-dept8" >BME</option>
  <option name="your-dept8" >Civil</option>
  <option name="your-dept8" >CSE</option>
  <option name="your-dept8" >ECE</option>
    <option name="your-dept8" >EEE</option>
	  <option name="your-dept8" >E&&I</option>
	    <option name="your-dept8" >IT</option>
		<option name="your-dept8" >MBA</option>
		<option name="your-dept8" >MCA</option>
  
</select>
<br>
<br>
</label> 
							</div>
							</td>
							</tr><tr>
						<td>
						<div>
		      				  <label for="name">
		      					<span class="required">Name:</span>
									<input type="text"  name="name9" id="name9" placeholder="Member Name"  tabindex="1" autofocus="autofocus"/></br>
		      				  </label>
								</td>
							</div>
							<td>
							<div>
		      				  <label for="name">
							  <span class="required">Department: *</span> <br>
		      					 <select name="your-dept9">
  <option name="your-dept9" >BME</option>
  <option name="your-dept9" >Civil</option>
  <option name="your-dept9" >CSE</option>
  <option name="your-dept9" >ECE</option>
    <option name="your-dept9" >EEE</option>
	  <option name="your-dept9" >E&&I</option>
	    <option name="your-dept9" >IT</option>
		<option name="your-dept9" >MBA</option>
		<option name="your-dept9" >MCA</option>
  
</select>
<br>
<br>
</label> 
							</div>
							</td>
							</tr><tr>
						<td>
						<div>
		      				  <label for="name">
		      					<span class="required">Name:</span>
									<input type="text"  name="name10" id="name1" placeholder="Member Name"  tabindex="1" autofocus="autofocus"/></br>
		      				  </label>
								</td>
							</div>
							<td>
							<div>
		      				  <label for="name">
							  <span class="required">Department: *</span> <br>
		      					 <select name="your-dept10">
  <option name="your-dept10" >BME</option>
  <option name="your-dept10" >Civil</option>
  <option name="your-dept10" >CSE</option>
  <option name="your-dept10" >ECE</option>
    <option name="your-dept10" >EEE</option>
	  <option name="your-dept10" >E&&I</option>
	    <option name="your-dept10" >IT</option>
		<option name="your-dept10" >MBA</option>
		<option name="your-dept10" >MCA</option>
  
</select>
<br>
<br>
</label> 
							</div>
							</td>
							</tr><tr>
						<td>
						<div>
		      				  <label for="name">
		      					<span class="required">Name:</span>
									<input type="text"  name="name11" id="name1" placeholder="Member Name"  tabindex="1" autofocus="autofocus"/></br>
		      				  </label>
								</td>
							</div>
							<td>
							<div>
		      				  <label for="name">
							  <span class="required">Department: *</span> <br>
		      					 <select name="your-dept11">
  <option name="your-dept11" >BME</option>
  <option name="your-dept11" >Civil</option>
  <option name="your-dept11" >CSE</option>
  <option name="your-dept11" >ECE</option>
    <option name="your-dept11" >EEE</option>
	  <option name="your-dept11" >E&&I</option>
	    <option name="your-dept11" >IT</option>
		<option name="your-dept11" >MBA</option>
		<option name="your-dept11" >MCA</option>
  
</select>
<br>
<br>
</label> 
							</div>
							</td>
							</tr><tr>
						<td>
						<div>
		      				  <label for="name">
		      					<span class="required">Name:</span>
									<input type="text"  name="name12" id="name1" placeholder="Member Name"  tabindex="1" autofocus="autofocus"/></br>
		      				  </label>
								</td>
							</div>
							<td>
							<div>
		      				  <label for="name">
							  <span class="required">Department: *</span> <br>
		      					 <select name="your-dept12">
  <option name="your-dept12" >BME</option>
  <option name="your-dept12" >Civil</option>
  <option name="your-dept12" >CSE</option>
  <option name="your-dept12" >ECE</option>
    <option name="your-dept12" >EEE</option>
	  <option name="your-dept12" >E&&I</option>
	    <option name="your-dept12" >IT</option>
		<option name="your-dept12" >MBA</option>
		<option name="your-dept12" >MCA</option>
  
</select>
<br>
<br>
</label> 
							</div>
							</td>
							</tr>
								<tr>
								<td>
							<div>
									<button type="submit" class="submit-form"  name="Register6" value="Register6">Register</button> 
							</div>
							</tr>
							</td>
							</table>
							</form>
							</div>
							
<?php }
if($event=='Group Singing'){
	?>
	<br>
	<div class="register-form">
	Enter other team members name and department
<form action="Database1.php" method="post" style="color: black" id="regForm">

<input type="hidden"  readonly name="event" value="Group Singing"/>
						<table>
						<tr>
						<td>
						<div>
		      				  <label for="name">
		      					<span class="required">Name:</span>
									<input type="text"  name="name1" id="name1" placeholder="Member Name"  tabindex="1" autofocus="autofocus"/></br>
		      				  </label>
								</td>
							</div>
							<td>
							<div>
		      				  <label for="name">
							  <span class="required">Department: *</span> <br>
		      					 <select name="your-dept1">
  <option name="your-dept1" >BME</option>
  <option name="your-dept1" >Civil</option>
  <option name="your-dept1" >CSE</option>
  <option name="your-dept1" >ECE</option>
    <option name="your-dept1" >EEE</option>
	  <option name="your-dept1" >E&&I</option>
	    <option name="your-dept1" >IT</option>
		<option name="your-dept1" >MBA</option>
		<option name="your-dept1" >MCA</option>
  
</select>
<br>
<br>
</label> 
							</div>
							</td>
							</tr>
							<tr>
						<td>
							<div>
		      				  <label for="name">
		      					<span class="required">Name:</span> 
									<input type="text" maxlength="15" name="name2" id="name2" placeholder="Member Name"  tabindex="1" autofocus="autofocus"/></br>
		      				  </label> 
							</div>
						</td>
						<td>
	<div>
		      				  <label for="name">
							  <span class="required">Department: *</span> <br>
		      					 <select name="your-dept2">
  <option name="your-dept2" >BME</option>
  <option name="your-dept2" >Civil</option>
  <option name="your-dept2" >CSE</option>
  <option name="your-dept2" >ECE</option>
    <option name="your-dept2" >EEE</option>
	  <option name="your-dept2" >E&&I</option>
	    <option name="your-dept2" >IT</option>
		<option name="your-dept2" >MBA</option>
		<option name="your-dept2" >MCA</option>
		
  
</select>
<br>
<br>
</label> 
							</div>
								</td>
								</tr>
								<tr>
						<td>
							<div>
		      				  <label for="name">
		      					<span class="required">Name:</span> 
									<input type="text" maxlength="15" name="name3" id="name" placeholder="Member Name"  tabindex="1" autofocus="autofocus"/></br>
		      				  </label> 
							</div>
						</td>
						<td>
	<div>
		      				  <label for="name">
							  <span class="required">Department: *</span> <br>
		      					 <select name="your-dept3">
  <option name="your-dept3" >BME</option>
  <option name="your-dept3" >Civil</option>
  <option name="your-dept3" >CSE</option>
  <option name="your-dept3" >ECE</option>
    <option name="your-dept3" >EEE</option>
	  <option name="your-dept3" >E&&I</option>
	    <option name="your-dept3" >IT</option>
		<option name="your-dept3" >MBA</option>
		<option name="your-dept3" >MCA</option>
		
 
</select>
<br>
<br>
</label> 
							</div>
								</td>
								</tr>
<tr>
						<td>
						<div>
		      				  <label for="name">
		      					<span class="required">Name:</span>
									<input type="text"  name="name4" id="name1" placeholder="Member Name"  tabindex="1" autofocus="autofocus"/></br>
		      				  </label>
								</td>
							</div>
							<td>
							<div>
		      				  <label for="name">
							  <span class="required">Department: *</span> <br>
		      					 <select name="your-dept4">
  <option name="your-dept4" >BME</option>
  <option name="your-dept4" >Civil</option>
  <option name="your-dept4" >CSE</option>
  <option name="your-dept4" >ECE</option>
    <option name="your-dept4" >EEE</option>
	  <option name="your-dept4" >E&&I</option>
	    <option name="your-dept4" >IT</option>
		<option name="your-dept4" >MBA</option>
		<option name="your-dept4" >MCA</option>
  
</select>
<br>
<br>
</label> 
							</div>
							</td>
							</tr><tr>
						<td>
						<div>
		      				  <label for="name">
		      					<span class="required">Name:</span>
									<input type="text"  name="name5" id="name1" placeholder="Member Name"  tabindex="1" autofocus="autofocus"/></br>
		      				  </label>
								</td>
							</div>
							<td>
							<div>
		      				  <label for="name">
							  <span class="required">Department: *</span> <br>
		      					 <select name="your-dept5">
  <option name="your-dept5" >BME</option>
  <option name="your-dept5" >Civil</option>
  <option name="your-dept5" >CSE</option>
  <option name="your-dept5" >ECE</option>
    <option name="your-dept5" >EEE</option>
	  <option name="your-dept5" >E&&I</option>
	    <option name="your-dept5" >IT</option>
		<option name="your-dept5" >MBA</option>
		<option name="your-dept5" >MCA</option>
  
</select>
<br>
<br>
</label> 
							</div>
							</td>
							</tr><tr>
						<td>
						<div>
		      				  <label for="name">
		      					<span class="required">Name:</span>
									<input type="text"  name="name6" id="name1" placeholder="Member Name"  tabindex="1" autofocus="autofocus"/></br>
		      				  </label>
								</td>
							</div>
							<td>
							<div>
		      				  <label for="name">
							  <span class="required">Department: *</span> <br>
		      					 <select name="your-dept6">
  <option name="your-dept6" >BME</option>
  <option name="your-dept6" >Civil</option>
  <option name="your-dept6" >CSE</option>
  <option name="your-dept6" >ECE</option>
    <option name="your-dept6" >EEE</option>
	  <option name="your-dept6" >E&&I</option>
	    <option name="your-dept6" >IT</option>
		<option name="your-dept6" >MBA</option>
		<option name="your-dept6" >MCA</option>
  
</select>
<br>
<br>
</label> 
							</div>
							</td>
							</tr>
							<tr>
								<td>
							<div>
									<button type="submit" class="submit-form"  name="Register8" value="Register8">Register</button> 
							</div>
							</tr>
							</td>
							</table>
							</form>
							</div>
							
<?php }
    }
} else {
    echo "0 results";
}
	}
else
	echo("Error description: " . mysqli_error($cn));
	}
}
	
}


mysqli_close($cn);
?>
</body>
</html>
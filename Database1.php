<?php
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
$con=mysqli_connect("localhost","id895454_root","excelsior","id895454_details");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


if(isset($_POST['Register1']))
	{
$your_email = $_SESSION["email"];
$your_name1 = mysqli_real_escape_string($con, $_POST['name1']);
$your_dept1 = mysqli_real_escape_string($con, $_POST['your-dept1']);
$your_name2 = mysqli_real_escape_string($con, $_POST['name2']);
$your_dept2 = mysqli_real_escape_string($con, $_POST['your-dept2']);
$your_name3 = mysqli_real_escape_string($con, $_POST['name3']);
$your_dept3 = mysqli_real_escape_string($con, $_POST['your-dept3']);
$event = mysqli_real_escape_string($con, $_POST['event']);
if($your_name1!='')
{
	$sql = "INSERT INTO members(name,email,dept,event) VALUES ('$your_name1','$your_email','$your_dept1','$event')";
$results= mysqli_query($con,$sql);
}
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	if($your_name2!='')
{
	$sql = "INSERT INTO members(name,email,dept,event) VALUES ('$your_name2','$your_email','$your_dept2','$event')";
$results= mysqli_query($con,$sql);
}
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if($your_name3!='')
{
	$sql = "INSERT INTO members(name,email,dept,event) VALUES ('$your_name3','$your_email','$your_dept3','$event')";
$results= mysqli_query($con,$sql);
}
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	}
	if(isset($_POST['Register2']))
	{
$your_email = $_SESSION["email"];
$your_name1 = mysqli_real_escape_string($con, $_POST['name1']);
$your_dept1 = mysqli_real_escape_string($con, $_POST['your-dept1']);
$your_name2 = mysqli_real_escape_string($con, $_POST['name2']);
$your_dept2 = mysqli_real_escape_string($con, $_POST['your-dept2']);
$your_name3 = mysqli_real_escape_string($con, $_POST['name3']);
$your_dept3 = mysqli_real_escape_string($con, $_POST['your-dept3']);
$event = mysqli_real_escape_string($con, $_POST['event']);
if($your_name1!='')
{
	$sql = "INSERT INTO members(name,email,dept,event) VALUES ('$your_name1','$your_email','$your_dept1','$event')";
$results= mysqli_query($con,$sql);
}
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	if($your_name2!='')
{
	$sql = "INSERT INTO members(name,email,dept,event) VALUES ('$your_name2','$your_email','$your_dept2','$event')";
$results= mysqli_query($con,$sql);
}
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if($your_name3!='')
{
	$sql = "INSERT INTO members(name,email,dept,event) VALUES ('$your_name3','$your_email','$your_dept3','$event')";
$results= mysqli_query($con,$sql);
}
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	}
	if(isset($_POST['Register3']))
	{
$your_email = $_SESSION["email"];
$your_name1 = mysqli_real_escape_string($con, $_POST['name1']);
$your_dept1 = mysqli_real_escape_string($con, $_POST['your-dept1']);
$your_name2 = mysqli_real_escape_string($con, $_POST['name2']);
$your_dept2 = mysqli_real_escape_string($con, $_POST['your-dept2']);
$event = mysqli_real_escape_string($con, $_POST['event']);
if($your_name1!='')
{
	$sql = "INSERT INTO members(name,email,dept,event) VALUES ('$your_name1','$your_email','$your_dept1','$event')";
$results= mysqli_query($con,$sql);
}
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	if($your_name2!='')
{
	$sql = "INSERT INTO members(name,email,dept,event) VALUES ('$your_name2','$your_email','$your_dept2','$event')";
$results= mysqli_query($con,$sql);
}
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	}
	if(isset($_POST['Register4']))
	{
$your_email = $_SESSION["email"];
$your_name1 = mysqli_real_escape_string($con, $_POST['name1']);
$your_dept1 = mysqli_real_escape_string($con, $_POST['your-dept1']);
$event = mysqli_real_escape_string($con, $_POST['event']);
if($your_name1!='')
{
	$sql = "INSERT INTO members(name,email,dept,event) VALUES ('$your_name1','$your_email','$your_dept1','$event')";
$results= mysqli_query($con,$sql);
}
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	}
  if(isset($_POST['Register5']))
	{
$your_email = $_SESSION["email"];
$your_name1 = mysqli_real_escape_string($con, $_POST['name1']);
$your_dept1 = mysqli_real_escape_string($con, $_POST['your-dept1']);
$event = mysqli_real_escape_string($con, $_POST['event']);
if($your_name1!='')
{
	$sql = "INSERT INTO members(name,email,dept,event) VALUES ('$your_name1','$your_email','$your_dept1','$event')";
$results= mysqli_query($con,$sql);
}
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	}
  if(isset($_POST['Register8']))
	{
$event = mysqli_real_escape_string($con, $_POST['event']);
$your_email = $_SESSION["email"];
$your_name1 = mysqli_real_escape_string($con, $_POST['name1']);
$your_dept1 = mysqli_real_escape_string($con, $_POST['your-dept1']);
$your_name2 = mysqli_real_escape_string($con, $_POST['name2']);
$your_dept2 = mysqli_real_escape_string($con, $_POST['your-dept2']);
$your_name3 = mysqli_real_escape_string($con, $_POST['name3']);
$your_dept3 = mysqli_real_escape_string($con, $_POST['your-dept3']);
$your_name4 = mysqli_real_escape_string($con, $_POST['name4']);
$your_dept4 = mysqli_real_escape_string($con, $_POST['your-dept4']);
$your_name5 = mysqli_real_escape_string($con, $_POST['name5']);
$your_dept5 = mysqli_real_escape_string($con, $_POST['your-dept5']);
$your_name6 = mysqli_real_escape_string($con, $_POST['name6']);
$your_dept6 = mysqli_real_escape_string($con, $_POST['your-dept6']);
if($your_name1!='')
{
	$sql = "INSERT INTO members(name,email,dept,event) VALUES ('$your_name1','$your_email','$your_dept1','$event')";
$results= mysqli_query($con,$sql);
}
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	if($your_name2!='')
{
	$sql = "INSERT INTO members(name,email,dept,event) VALUES ('$your_name2','$your_email','$your_dept2','$event')";
$results= mysqli_query($con,$sql);
}
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if($your_name3!='')
{
	$sql = "INSERT INTO members(name,email,dept,event) VALUES ('$your_name3','$your_email','$your_dept3','$event')";
$results= mysqli_query($con,$sql);
}
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }if($your_name4!='')
{
	$sql = "INSERT INTO members(name,email,dept,event) VALUES ('$your_name4','$your_email','$your_dept4','$event')";
$results= mysqli_query($con,$sql);
}
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	if($your_name5!='')
{
	$sql = "INSERT INTO members(name,email,dept,event) VALUES ('$your_name5','$your_email','$your_dept5','$event')";
$results= mysqli_query($con,$sql);
}
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if($your_name6!='')
{
	$sql = "INSERT INTO members(name,email,dept,event) VALUES ('$your_name6','$your_email','$your_dept6','$event')";
$results= mysqli_query($con,$sql);
}
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	}
	if(isset($_POST['Register7']))
	{
$event = mysqli_real_escape_string($con, $_POST['event']);
$your_email = $_SESSION["email"];
$your_name1 = mysqli_real_escape_string($con, $_POST['name1']);
$your_dept1 = mysqli_real_escape_string($con, $_POST['your-dept1']);
$your_name2 = mysqli_real_escape_string($con, $_POST['name2']);
$your_dept2 = mysqli_real_escape_string($con, $_POST['your-dept2']);
$your_name3 = mysqli_real_escape_string($con, $_POST['name3']);
$your_dept3 = mysqli_real_escape_string($con, $_POST['your-dept3']);
$your_name4 = mysqli_real_escape_string($con, $_POST['name4']);
$your_dept4 = mysqli_real_escape_string($con, $_POST['your-dept4']);
$your_name5 = mysqli_real_escape_string($con, $_POST['name5']);
$your_dept5 = mysqli_real_escape_string($con, $_POST['your-dept5']);
$your_name6 = mysqli_real_escape_string($con, $_POST['name6']);
$your_dept6 = mysqli_real_escape_string($con, $_POST['your-dept6']);
$your_name7 = mysqli_real_escape_string($con, $_POST['name7']);
$your_dept7 = mysqli_real_escape_string($con, $_POST['your-dept7']);
$your_name8 = mysqli_real_escape_string($con, $_POST['name8']);
$your_dept8 = mysqli_real_escape_string($con, $_POST['your-dept8']);
$your_name9 = mysqli_real_escape_string($con, $_POST['name9']);
$your_dept9 = mysqli_real_escape_string($con, $_POST['your-dept9']);
$your_name10 = mysqli_real_escape_string($con, $_POST['name10']);
$your_dept10 = mysqli_real_escape_string($con, $_POST['your-dept10']);
if($your_name1!='')
{
	$sql = "INSERT INTO members(name,email,dept,event) VALUES ('$your_name1','$your_email','$your_dept1','$event')";
$results= mysqli_query($con,$sql);
}
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	if($your_name2!='')
{
	$sql = "INSERT INTO members(name,email,dept,event) VALUES ('$your_name2','$your_email','$your_dept2','$event')";
$results= mysqli_query($con,$sql);
}
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if($your_name3!='')
{
	$sql = "INSERT INTO members(name,email,dept,event) VALUES ('$your_name3','$your_email','$your_dept3','$event')";
$results= mysqli_query($con,$sql);
}
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }if($your_name4!='')
{
	$sql = "INSERT INTO members(name,email,dept,event) VALUES ('$your_name4','$your_email','$your_dept4','$event')";
$results= mysqli_query($con,$sql);
}
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	if($your_name5!='')
{
	$sql = "INSERT INTO members(name,email,dept,event) VALUES ('$your_name5','$your_email','$your_dept5','$event')";
$results= mysqli_query($con,$sql);
}
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if($your_name6!='')
{
	$sql = "INSERT INTO members(name,email,dept,event) VALUES ('$your_name6','$your_email','$your_dept6','$event')";
$results= mysqli_query($con,$sql);
}
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}if($your_name7!='')
{
	$sql = "INSERT INTO members(name,email,dept,event) VALUES ('$your_name7','$your_email','$your_dept7','$event')";
$results= mysqli_query($con,$sql);
}
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	if($your_name8!='')
{
	$sql = "INSERT INTO members(name,email,dept,event) VALUES ('$your_name8','$your_email','$your_dept8','$event')";
$results= mysqli_query($con,$sql);
}
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if($your_name9!='')
{
	$sql = "INSERT INTO members(name,email,dept,event) VALUES ('$your_name9','$your_email','$your_dept9','$event')";
$results= mysqli_query($con,$sql);
}
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }if($your_name10!='')
{
	$sql = "INSERT INTO members(name,email,dept,event) VALUES ('$your_name10','$your_email','$your_dept10','$event')";
$results= mysqli_query($con,$sql);
}
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
}
if(isset($_POST['Register6']))
	{
$event = mysqli_real_escape_string($con, $_POST['event']);
$your_email = $_SESSION["email"];
$your_name1 = mysqli_real_escape_string($con, $_POST['name1']);
$your_dept1 = mysqli_real_escape_string($con, $_POST['your-dept1']);
$your_name2 = mysqli_real_escape_string($con, $_POST['name2']);
$your_dept2 = mysqli_real_escape_string($con, $_POST['your-dept2']);
$your_name3 = mysqli_real_escape_string($con, $_POST['name3']);
$your_dept3 = mysqli_real_escape_string($con, $_POST['your-dept3']);
$your_name4 = mysqli_real_escape_string($con, $_POST['name4']);
$your_dept4 = mysqli_real_escape_string($con, $_POST['your-dept4']);
$your_name5 = mysqli_real_escape_string($con, $_POST['name5']);
$your_dept5 = mysqli_real_escape_string($con, $_POST['your-dept5']);
$your_name6 = mysqli_real_escape_string($con, $_POST['name6']);
$your_dept6 = mysqli_real_escape_string($con, $_POST['your-dept6']);
$your_name7 = mysqli_real_escape_string($con, $_POST['name7']);
$your_dept7 = mysqli_real_escape_string($con, $_POST['your-dept7']);
$your_name8 = mysqli_real_escape_string($con, $_POST['name8']);
$your_dept8 = mysqli_real_escape_string($con, $_POST['your-dept8']);
$your_name9 = mysqli_real_escape_string($con, $_POST['name9']);
$your_dept9 = mysqli_real_escape_string($con, $_POST['your-dept9']);
$your_name10 = mysqli_real_escape_string($con, $_POST['name10']);
$your_dept10 = mysqli_real_escape_string($con, $_POST['your-dept10']);
$your_name11 = mysqli_real_escape_string($con, $_POST['name11']);
$your_dept11 = mysqli_real_escape_string($con, $_POST['your-dept11']);
$your_name12 = mysqli_real_escape_string($con, $_POST['name12']);
$your_dept12 = mysqli_real_escape_string($con, $_POST['your-dept12']);
if($your_name1!='')
{
	$sql = "INSERT INTO members(name,email,dept,event) VALUES ('$your_name1','$your_email','$your_dept1','$event')";
$results= mysqli_query($con,$sql);
}
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	if($your_name2!='')
{
	$sql = "INSERT INTO members(name,email,dept,event) VALUES ('$your_name2','$your_email','$your_dept2','$event')";
$results= mysqli_query($con,$sql);
}
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if($your_name3!='')
{
	$sql = "INSERT INTO members(name,email,dept,event) VALUES ('$your_name3','$your_email','$your_dept3','$event')";
$results= mysqli_query($con,$sql);
}
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }if($your_name4!='')
{
	$sql = "INSERT INTO members(name,email,dept,event) VALUES ('$your_name4','$your_email','$your_dept4','$event')";
$results= mysqli_query($con,$sql);
}
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	if($your_name5!='')
{
	$sql = "INSERT INTO members(name,email,dept,event) VALUES ('$your_name5','$your_email','$your_dept5','$event')";
$results= mysqli_query($con,$sql);
}
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if($your_name6!='')
{
	$sql = "INSERT INTO members(name,email,dept,event) VALUES ('$your_name6','$your_email','$your_dept6','$event')";
$results= mysqli_query($con,$sql);
}
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}if($your_name7!='')
{
	$sql = "INSERT INTO members(name,email,dept,event) VALUES ('$your_name7','$your_email','$your_dept7','$event')";
$results= mysqli_query($con,$sql);
}
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	if($your_name8!='')
{
	$sql = "INSERT INTO members(name,email,dept,event) VALUES ('$your_name8','$your_email','$your_dept8','$event')";
$results= mysqli_query($con,$sql);
}
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if($your_name9!='')
{
	$sql = "INSERT INTO members(name,email,dept,event) VALUES ('$your_name9','$your_email','$your_dept9','$event')";
$results= mysqli_query($con,$sql);
}
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }if($your_name10!='')
{
	$sql = "INSERT INTO members(name,email,dept,event) VALUES ('$your_name10','$your_email','$your_dept10','$event')";
$results= mysqli_query($con,$sql);
}
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  if($your_name11!='')
{
	$sql = "INSERT INTO members(name,email,dept,event) VALUES ('$your_name11','$your_email','$your_dept11','$event')";
$results= mysqli_query($con,$sql);
}
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	if($your_name12!='')
{
	$sql = "INSERT INTO members(name,email,dept,event) VALUES ('$your_name12','$your_email','$your_dept12','$event')";
$results= mysqli_query($con,$sql);
}
}
mysqli_close($con);
?>
<h1> Successfully Registered</h1>
</body>
</html>
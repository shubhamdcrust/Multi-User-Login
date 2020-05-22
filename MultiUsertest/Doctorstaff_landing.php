<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
	<title>Staff Dashboard</title>
	<link rel="stylesheet" type="text/css" href="style_.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
	<style>
		
body{
	margin: 0;
	padding: 0;
	font-family: sans-serif;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #ffffff;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: #32CD32;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: #32CD32;
    color: white; 
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #32CD32;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}



.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 600px;
    margin: auto;
    text-align: center;
}

.title {
    color: grey;
    font-size: 18px;
}



a {
    text-decoration: none;
    font-size: 22px;
    color: black;
}

button:hover, a:hover {
    opacity: 0.7;
}

	</style>
</head>
<body>
	<div class="toggle">
		
	</div>
	<nav>
		
		<ul>
			<li><font face="Comics Sans MS" size="20"><B>MultiUser Login</B></li></font>
      <li></li>
			<li><a href="dashboard.php"></li>
			<li><a href="staff_landing.php">Home</li>
			<li><a href="/project%20ehr/erase_tkt.php">Raise Ticket</li>
			 <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Add Details</a>
    <div class="dropdown-content">
      <a href="/project%20ehr/data/opd_dash.php">Existing Patient </a>
    </div>
  </li>
			<li><a href="/project%20ehr/contact/index.php">Contact Us</li>
			<li> <a href="/project%20ehr/hospital_login.php"> Logout</li>	</a>
		</ul>
	</nav>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
<div class="card">
  <img src="dummy.png" alt="profile" align="center" style="width:25%">
  <h1>Doctor  Name</h1>
  <p class="title">Department</p>
  <p>CONTACT NUMBER</p>
  <p> UID</p>
  <p> Email id </p>
  <p></p>
  <a href="#"><i class="fa fa-twitter"></i></a> 
  <a href="#"><i class="fa fa-linkedin"></i></a> 
  <a href="#"><i class="fa fa-facebook"></i></a> 
  
</div>
</body>
</html>
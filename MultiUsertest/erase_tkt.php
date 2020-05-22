<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
	<title>Raise Ticket</title>
	<link rel="stylesheet" type="text/css" href="style_1.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
	<style>
		
body{
	margin: 0;
	padding: 0;
	font-family: sans-serif;
}

nav{
  width: 100%;
  background: #ffffff;

}
ul{
  width: 80%;
  margin: 0 auto;
  padding: 0;
}
ul li{
  list-style: none;
  display: inline-block;
  padding: 20px;
}
ul li:hover {
  background: #32CD32;
  color: #ffffff;
}
ul li a{
  color: #32CD32;
  text-decoration: none;
}
.toggle
{
  width: 100%;
  padding: 10px 20px;
  background: #fff;
  text-align: right;
  box-sizing: border-box;
  color: #fff;
  font-size: 30px;
  display: none;
}
@media (max-width: 768px)
{
  .toggle
  {
    display: block;
  }
  
  ul
  {
    width: 100%;
  }

  ul li
  {
    display: block;
    text-align: center;
  }
}
.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 800px;
    margin: auto;
    text-align: left;
}

.container {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default radio button */
.container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
    background-color: #32CD32;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
    display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
  top: 9px;
  left: 9px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: white;
}

/* style inputs and link buttons */
input,
.btn {
  width: 70%;
  padding: 12px;
  border: none;
  border-bottom: 2px solid #32CD32;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; 
  outline: none;
  background: transparent;/* remove underline from anchors */
}


input:hover,
.btn:hover {
  opacity: 1;
}


input[type=submit] {
  background-color: #ffffff;
  color: #32CD32;
  cursor: pointer;
  border-radius: 8px;
  width: 130px;
}

input[type=submit]:hover {
  background-color: #32CD32;
  color:#ffffff
}

	</style>
</head>
<body>
	<div class="toggle">
		<i class="fa fa-bars" aria-hidden="true"></i>
	</div>
	<nav>
		
		<ul>
			<li> <b>CareOwn </b></li>
			<li><a href="staff_landing.php">Home</li>
			<li><a href="erase_tkt.php">Erase Ticket</li>
			<li><a href="pharma.php">Data Entry</li>
			<li><a href="#">Contact Us</li>
			<li> <a href="../home.php"> Logout</li>	</a>
		</ul>
	</nav>
	<br>
	<br>
  <div class="card">
<h2> List of details to be changed </h2>
<form action="">
  <label class="container">Date of Birth
  <input type="radio" checked="checked" name="radio">
  <span class="checkmark"></span>
</label>
<label class="container">UIN
  <input type="radio" name="radio">
  <span class="checkmark"></span>
</label>
<label class="container">Name
  <input type="radio" name="radio">
  <span class="checkmark"></span>
</label>
<label class="container">Last Name
  <input type="radio" name="radio">
  <span class="checkmark"></span>
</label>
<br>
<br>
 <input type="text" name="user_id2" placeholder="Tell us about your problemx  " >
 <br>
        <input type="submit" name="psubmit" value="Submit">  
</form>
<form action="tkt_old.inc.php" method="POST" enctype="multipart/form-data">  
    <input type="file" name="file">
    <button type="submit" name="submit">Upload Old Proof</button>
  </form>
<form action="tkt_new.inc.php" method="POST" enctype="multipart/form-data">  
    <input type="file" name="file">
    <button type="submit" name="submit">Upload New Proof</button>
  </form>
</div>
</body>
</html>
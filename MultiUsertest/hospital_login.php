<?php

session_start();
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Times New Roman;
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
  background: #654321
}
ul li a{
  color: #654321;
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


* {
  box-sizing: border-box;
}

/* style the container */
.container {
  position: relative;
  border-radius: 5px;
  background-color: #ffffff;
  padding: 20px 0 30px 0;
} 

/* style inputs and link buttons */
input,
.btn {
  width: 60%;
  padding: 12px;
  border: none;
  border-bottom: 2px solid #654321;
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

/* add appropriate colors to fb, twitter and google buttons */
.fb {
  background-color: #654321;
  color: white;
}

.hpl {
  background-color: #ffffff;
  color: white;
  display: flex;
  justify-content:center;

}

.google {
  background-color: #ffffff;
  color: white;
  display: flex;
  justify-content:center;
}

/* style the submit button */
input[type=submit] {
  background-color: #ffffff;
  color: #32CD32;
  cursor: pointer;
  border-radius: 8px;
  width: 130px;
}

input[type=submit]:hover {
  background-color: #654321;
  color:#ffffff
}

/* Two-column layout */
.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* vertical line */
.vl {
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  border: 2px solid #ddd;
  height: 175px;
}

/* text inside the vertical line */
.vl-innertext {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 50%;
  padding: 8px 10px;
}

/* hide some text on medium and large screens */
.hide-md-lg {
  display: none;
}

/* bottom container */
.bottom-container {
  text-align: center;
  background-color:  #ffffff;
  border-radius: 0px 0px 4px 4px;
  
}


/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}



.m-container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
  /* hide the vertical line */
  .vl {
    display: none;
  }
  /* show the hidden text on small screens */
  .hide-md-lg {
    display: block;
    text-align: center;
  }
}
</style>
</head>
<body>
<form action="includes/login.incc.php" method="POST">
  <div class="toggle">
    <i class="fa fa-bars" aria-hidden="true"></i>
  </div>
  <nav>
    
    <ul>
       <li><font face="Comics Sans MS" size="20"><B>Multi User Test</B></li></font>
      <li></li>
      <li><a href="dashboard.php">Home</li></a>
      <li><a href="#">About Us</li></a>
        <li><a href="dashboard.php">Department</li></a>
      <li><a href="/project%20ehr/contact/index.php">Contact</li></a>
      
    </ul>
  </nav>

<div class="container">
  <form action="includes/loggiin.inncc.php" method="POST">
    <div class="row">
      <br>
      <br>
      <br>
      <h2 style="text-align:center"></h2>
      <div class="vl">
        
      </div>
      <h2></h2>
      <div class="col">
        <br>
        <div class="hpl">
         <input type="submit" name="hlogin" value="Admin Login"> </div>
         <br>
         <div class="google">
         <input type="submit" name="plogin" value="Client Login">
       </div>
      </div>
<h2></h2>
      <div class="col">

        <div class="hide-md-lg">
          
        </div>
        
        <br>
       
        <br>
        <input type="text" name="user" placeholder="Enter your username" >
        <input type="password" name="pass" placeholder="Enter your Password" >
        <br>
        <input type="submit" name="submit" value="Login">
        <input type="submit" name="signup" value="Signup">
      </div>
      
    </div>
  </form>
</div>

<div class="bottom-container">
  <div class="row">
    <div class="col">
      
    </div>
    <div class="col">
      Trouble login
      <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Click Here</button></div>
</form>
      <div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
  

    <div class="m-container">
      <label class="container">Forget UserName
  <input type="radio" checked="checked" name="radio">
  <span class="checkmark"></span>
</label>
<label class="m-container">Forget Password
  <input type="radio" name="radio">
  <span class="checkmark"></span>
</label>
      
      <input type="text" placeholder="Enter Email id" name="uname" required>
<br>
    
      <button type="submit">Login</button>
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

  </div>
</div>

</body>
</html>
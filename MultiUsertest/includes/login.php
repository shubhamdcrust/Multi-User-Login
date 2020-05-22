<?php
session_start();

include('connection.php');

if(isset($_POST['submit']))
{
//$type=$_POST['type'];
$username=$_POST['user'];
$password=$_POST['pass'];

$Receptionist="Receptionist";
$srDoctor="srDoctor";

$query_r="SELECT * from login where username='$username' And password='$password'And type='Receptionist'";
$result_r=mysql_query($query_r);

$query_d="SELECT * from login where username='$username' And password='$password'And type='srDoctor'";
$result_d=mysql_query($query_d);

if(mysqli_num_rows($result_r)==1){
	header("Location:../staff_signup.php");
}
else if (mysqli_num_rows($result_d)==1) {
	header("Location:../pharma.php"); 
}
else{
	echo"<script>alert('Username or password is inValid' )</script)";
}
}


/*$query="SELECT * FROM login WHERE username='$username' AND password='$password' AND type='$type'";
$result=mysqli_query($query);

while($row=mysqli_fetch_array($result)){

	if($row['username']==$username && $row['password']==$password && $row['type']=='Receptionist'){
		header("Location:../staff_signup.php");
	}
	elseif ($row['username']==$username && $row['password']==$password && $row['type']=='srDoctor') {
		# code...
		header("Location:../staff_landing.php");
	}
}*/
?>
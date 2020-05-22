<?php

session_start();

if(isset($_POST['submit']))
{
	include_once 'connection.php';
	$uid=mysqli_real_escape_string($bd,$_POST['user']);
	$pwd=mysqli_real_escape_string($bd,$_POST['pass']);

	//Error handlers
	//Check if inputs are empty 
	if(empty($uid)||empty($pwd)){
		header("Location: ../hospital_login.php?login=empty");
		exit();

	}else{
		$sql="SELECT * FROM staff_register WHERE user='$uid'";
		$result=mysqli_query($bd,$sql);
		$resultCheck=mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header("Location: ../hospital_login.php?login=empty_user");
			exit();

		}else {
				if($row=mysqli_fetch_assoc($result)){

						if (!$pwd=$row['pwd']) {
							header("Location: ../hospital_login.php?login=password_wrong");
							exit();
						}
						else {
							
							$_SESSION['u_id']=$row['user_id'];
							$_SESSION['u_first']=$row['user_first'];
							$_SESSION['u_last']=$row['user_last'];
							$_SESSION['u_email']=$row['user_email'];
							$_SESSION['u_uid']=$row['user'];
							header("Location: ../staff_landing.php?remarks=success");
							exit();
			}
		}
	}
}
}
	
	else if ($_POST['hlogin'])
{
	header("Location: ../index.php?hospital=form");
}
	else if ($_POST['plogin'])
{
	header("Location: ../patient_login.php?patient=form");
}
else if ($_POST['p_plogin'])
{
	header("Location: ../patient_login.php?patient=form");
}
else if ($_POST['p_hlogin'])
{
	header("Location: ../hospital_login.php?hospital=form");
}
else if ($_POST['submit'])
{
	header("Location: ../staff_landing.php?hospital=form");
}
else if ($_POST['signup'])
{
	header("Location: ../staff_signup.php?hospital=form");
}


?>
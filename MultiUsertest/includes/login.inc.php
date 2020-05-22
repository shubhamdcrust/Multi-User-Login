<?php

session_start();

if(isset($_POST['submit1']))
{
	include_once 'connection.php';

	$uid = mysqli_real_escape_string($bd,$_POST['user_id']);
	$pwd = mysqli_real_escape_string($bd,$_POST['password']);
	
	//Error handlers
	//Check for empty fields 
	if(empty($uid)||empty($pwd)){
		header("Location: ../hospital_login.php?login=empty_fields1");
		exit();
	} 
// Check if input values are valid
			else {
				$sql= "SELECT * FROM hospital_users WHERE userid='$uid'";
				$result= mysqli_query($bd,$sql);
				$resultCheck=mysqli_num_rows($result);
				if($resultCheck < 1)
				{
					header("Location: ../hospital_login.php?login=no_user_found");
					exit();

				} else {

					if($row=mysqli_fetch_assoc($result)){

						if (!$pwd=$row['user_pwd']) {
							header("Location: ../hospital_login.php?login=password_wrong");
							exit();
						}
						//$hashedPwdCheck=password_verify($pwd,$row['user_pwd']);

						else {
							
							$_SESSION['u_id']=$row['user_id'];
							$_SESSION['u_first']=$row['user_first'];
							$_SESSION['u_last']=$row['user_last'];
							$_SESSION['u_email']=$row['user_email'];
							$_SESSION['u_uid']=$row['user_uid'];
							header("Location: ../hospital_login.php?remarks=success");
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
	
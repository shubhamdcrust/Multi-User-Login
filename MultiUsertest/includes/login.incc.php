<?php

	include('connection.php');

if(isset($_POST['submit'])){

	

	$uid=mysqli_real_escape_string($bd,$_POST['user']);
	$pass=mysqli_real_escape_string($bd,$_POST['pass']);

	$query=mysqli_query($bd,"SELECT desg,user,pwd FROM staff_register");
	while($row=mysqli_fetch_array($query))
	{
		$db_uid=$row['user'];
		$db_pwd=$row['pwd'];
		$db_desg=$row['desg'];

			if($uid==$db_uid && $pass==$db_pwd){
				session_start();
				//$_SESSION['u_id']=$row['desg'];
				$_SESSION["user"]=$db_uid;
				$_SESSION["desg"]=$db_desg;

				if($_SESSION["desg"]=='Laboratory'){
					header("Location:../Labstaff_landing.php?login=successfull");
				}
				else if ($_SESSION["desg"]=='srDoctor'){
					header("Location:../Doctorstaff_landing.php?login=successfull");
				}
				else if ($_SESSION["desg"]=='Pharmacist'){
					header("Location:../Pharmastaff_landing.php?login=successfull");
				}
				else if ($_SESSION["desg"]=='Receptionist'){
					header("Location:../Receptionstaff_landing.php?login=successfull");
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
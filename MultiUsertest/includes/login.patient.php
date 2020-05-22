<?php

session_start();

if(isset($_POST['psubmit']))
{
	
		header("Location: ../patient_landing.php?login=empty");
	
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
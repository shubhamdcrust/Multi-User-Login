<?php

	include('connection.php');

if(isset($_POST['submit'])){

    header("Location: patient_landing.php?hospital=form");	
}
	

else if ($_POST['p_plogin'])
{
	header("Location: ../patient_login.php?patient=form");
}
else if ($_POST['p_hlogin'])
{
	header("Location: ../hospital_login.php?hospital=form");
}


?>
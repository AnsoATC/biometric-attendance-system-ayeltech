<?php
/* Database connection setting */
	
    // $servername = "mysql-ansoatc.alwaysdata.net";
    // $username = "ansoatc";		//put your phpmyadmin username.(default is "root")
    // $password = "anso20092001";			//if your phpmyadmin has a password put it here.(default is "root")
    // $dbname = "ansoatc_biometric_attendance_system_ayeltech";

    $servername = "localhost";
    $username = "root";		//put your phpmyadmin username.(default is "root")
    $password = "";			//if your phpmyadmin has a password put it here.(default is "root")
    $dbname = "biometricattendace2";
    
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }
?>
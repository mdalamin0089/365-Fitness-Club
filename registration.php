<?php
    $host = "localhost";  
    $user = "root";  
    $pass = "";  
    $db = "fitness_club";
    $conn = mysqli_connect($host, $user, $pass, $db);  
    
    if(!$conn)  
    {  
    die('Could not connect: ' . mysqli_error());  
    }  

	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
    $number = $_POST['number'];

    //al amin

	$sql = "INSERT INTO members_reg (firstname, lastname, gender, email, password, number) VALUES ('$firstName', '$lastName', '$gender', '$email', '$password', '$number')"; 

	if (mysqli_query($conn, $sql)) {
    header("Location: ./index.php", true, 301); 
    echo '<script>alert("Registration successfully...")</script>';
	} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);

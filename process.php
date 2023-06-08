<?php
include_once 'database.php';
if(isset($_POST['lastinput']))
{	 
	 $full_name = $_POST['full_name'];
	 $father_name = $_POST['father_name'];
	 $address = $_POST['address'];
	 $username = $_POST['username'];
	 $email = $_POST['email'];
	 $phone_number = $_POST['phone_number'];
	 $password = $_POST['password'];
	 $confirm_password = $_POST['confirm_password'];
	 $sql = "INSERT INTO registration (full_name, father_name, address, username, email, phone_number, password, confirm_password)
	 VALUES ('$full_name', '$father_name', '$address', '$username', '$email', '$phone_number', '$password', '$confirm_password')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>


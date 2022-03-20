<?php

require('connection.php');

if(isset($_POST['submit'])){
$fname = "";
$lname = "";
$email = "";
$password = "";
$gender = "";


	$fname = stripslashes($_POST['fname']);
	$fname = mysqli_real_escape_string($conn, $_POST['fname']);
	
	$lname = stripslashes($_POST['lname']);
	$lname = mysqli_real_escape_string($conn, $_POST['lname']);

	$email = stripslashes($_POST['email']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);

	$password = stripslashes($_POST['pswrd']);
	$password = mysqli_real_escape_string($conn, $_POST['pswrd']);

	$gender = stripslashes($_POST['gender']);
	$gender = mysqli_real_escape_string($conn, $_POST['gender']);



// first check the database to make sure 
  // a user does not already exist with the same password and/or email


$sql="SELECT * FROM `registrationform` where (Password='$password' or email='$email');";

      $res=mysqli_query($conn,$sql);

      if (mysqli_num_rows($res) > 0) {
        
        $row = mysqli_fetch_assoc($res);
        if($email==isset($row['email']))
        {
            	echo "email already exists";
        }
		if($password==isset($row['Password']))
		{
			echo "Password is   already exists";
		}
		}
else{
	
//do your insert code here or do something (run your code)
	
$sql = "INSERT INTO registrationform (First_Name, Last_Name, Email, Password, Gender )
VALUES ('$fname', '$lname', '$email', '$password', '$gender' )";

if ($conn->query($sql) === TRUE) {
  echo '<script type="text/javascript">alert("data Saved")</script>';
} else {
  echo '<script type="text/javascript">alert("data Not Saved") </script>';
}
}


}
?>
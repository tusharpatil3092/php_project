<?php
	$server_name="localhost";
	$user_name="root";
	$password="";

	$cont=mysqli_connect($server_name,$user_name,$password) or die("Not Connected to Database");
	//echo "Connected to Database<br>";
	
	$select_db=mysqli_select_db($cont,'registration_info') or die("DB not found");
	//echo "DB selected<br>";

	if(isset($_POST['submit'])){

		
		$fname=$_POST['first_name'];
		$mname=$_POST['middle_name'];
		$lname=$_POST['last_name'];
		$userid=$_POST['user_id'];
		$pw=$_POST['password'];
		$email=$_POST['email'];
		$gender=$_POST['gender'];
		$birth_d=$_POST['b_date'];
		$birth_m=$_POST['b_month'];
		$birth_y=$_POST['b_year'];
		$add=$_POST['address'];

		$name=$fname." ".$mname." ".$lname;
		$dob=$birth_d."/".$birth_m."/".$birth_y;


		$insert_query=mysqli_query($cont, "INSERT INTO users(name, user_name, password, email_id, gender, birth_date, address)VALUES('$name', '$userid', '$pw', '$email', '$gender', '$dob', '$add')");

		if ($insert_query) {
   			 header("Location: /projects/HTML_Doc/php/read.php");
			exit();
			} 
		else {
    		 echo "Error: " .mysqli_error($cont);
			}*/


		

		/*$update_query=mysqli_query($cont, "UPDATE users SET address= ");

		if ($update_query) {
   			 echo "Record updated successfully";
			} 
		else {
    		 echo "Error: " .mysqli_error($cont);
			}*/



		/*$delet_query=mysqli_query($cont, "DELET users ");

		if ($delet_query) {
   			 echo "Record updated successfully";
			} 
		else {
    		 echo "Error: " .mysqli_error($cont);
			}*/

		mysqli_close($cont);
		
		//$insert_query=mysqli_query($cont, "INSERT INTO users(name, user_name, password, email_id, birth_date, address)VALUES('tushar jayawant patil', 'tushar3092', 'xyz', 'tushar.patil3092@gmail.com', '30/09/1992', 'xyz')");

		
	}


	/*$select_query=mysqli_query($cont, 'SELECT * FROM users');

	$num_rows=mysqli_num_rows($select_query);

	echo $num_rows;*/



?>
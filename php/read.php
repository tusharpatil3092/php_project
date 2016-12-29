<?php  

$read_query=mysqli_query($cont, "SELECT id, name, user_name, email_id, gender, birth_date, address FROM users ");

		if (mysqli_num_rows($read_query)>0) {

			while ($row = mysqli_fetch_assoc($read_query)) {
				echo "id:".$row["id"]." "."Name:".$row["name"]." "."User Name:".$row["user_name"]." "."Email ID:".$row["email_id"]." "."Gender:".$row["gender"]." "."Birth Date:".$row["birth_date"]." "."Address:".$row["address"]."<br>"."<br>";
			      }
			} 
		else {
    		 echo "Error: " .mysqli_error($cont);
			}

?>
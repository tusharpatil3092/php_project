function validation(){

	var first_name = document.getElementById('first_name').value;
	var middle_name = document.getElementById('middle_name').value;
	var last_name = document.getElementById('last_name').value;
	var c_user_name = document.getElementById('user_id').value;
	var password = document.getElementById('password').value;
	var c_password = document.getElementById('c_password').value;
	var email = document.getElementById('email').value;
	var gender = document.getElementsByName('gender');
	var b_date = document.getElementById('b_date').value;
	 var b_month = document.getElementById('b_month').value; 
	 var b_year = document.getElementById('b_year').value;
	var address = document.getElementById('address').value;	
 

 	var atpos = email.indexOf("@");
	var dotpos = email.lastIndexOf(".");

	var year = /^[0-9]{4}\b/;

 	if (c_user_name==" " || address=="" || b_year=="" || first_name=="" || middle_name=="" || last_name=="" || password=="" || c_password=="" || email=="") {
		alert("All Field should be filled!!");
		return false;
	}

	else if(!first_name.match(/^[A-Za-z]+$/)){ alert( "First name not proper!"); return false;}
		
	else if(!middle_name.match(/^[A-Za-z]+$/)){ alert( "Middle name not proper!"); return false;}
		
	else if(!last_name.match(/^[A-Za-z]+$/)){ alert( "Last name not proper!"); return false;}
		
	else if(password!=c_password){ alert("Password and confirm password Mismatch!"); return false;}
		
	else if(!((gender[0].checked == true) || (gender[1].checked == true))){
			alert("Please select Gender!");
			return false;
		}
	else if ((atpos < 1) || ((dotpos - atpos) < 2)) { alert("Please enter valid Email ID"); return false;}
		
	else if (!b_year.match(year)) { alert("Please enter the proper Year!!!"); return false;}
		
	else{
		//document.getElementById('formid').submit;
		return true;
		}
			
 
}
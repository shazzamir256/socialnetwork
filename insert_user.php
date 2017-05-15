<?php
include("includes/connection.php");
if(isset($_POST['sign_up'])){
	
    $name     = mysqli_real_escape_string($con,$_POST['u_name']);                   /* used to secure username*/
    $pass     = mysqli_real_escape_string($con,$_POST['u_pass']);
    $email    = mysqli_real_escape_string($con,$_POST['u_email']);
	$country  = mysqli_real_escape_string($con,$_POST['u_country']);
	$gender   = mysqli_real_escape_string($con,$_POST['u_gender']);
	$birthday = mysqli_real_escape_string($con,$_POST['u_birthday']);
	$status   = "unverified";                                  /* all users are default unverified*/
	$posts    = "no";
	$ver_code = mt_rand();                                     /*generates a random verification code for user to verify his email*/
	$image_name = $_FILES['image']['name'];
    $image_type = $_FILES['image']['type'];
	$image_size = $_FILES['image']['size'];
	$image_tmp  = $_FILES['image']['tmp_name'];   
	
	if(strlen($pass)<8){                                      /* if password length is less than 8 characters show this message*/
		
	echo "<script>alert('Password should be minimum 8 characters!')</script>";         /*Password validation*/
	exit();	
	}
	
	$check_email = "SELECT * FROM users WHERE user_email ='$email'";
	$run_email   = mysqli_query($con,$check_email);
	$check       = mysqli_num_rows($run_email);
	
	if ($check == 1) {
		
	echo "<script>alert('Email already exists,please try another!')</script>";         
	exit();		
	}
	
	$insert = "INSERT INTO users(user_name,user_pass,user_email,user_country,user_gender,user_birthday,user_image,user_reg_date,
	 status,ver_code,posts) VALUES('$name','$pass','$email','$country','$gender','$birthday','$image_name',NOW(),'$status','$ver_code','$posts')";
	
	if($image_type=="image/jpeg" or $image_type=="image/png" or $image_type=="image/gif"){
		
		if($image_size<=50000){
			
			move_uploaded_file($image_tmp,"images/$image_name");
		}
	else {
	echo "<script>alert('Image is larger,only 50kb size is allowed')</script>";
    }
	
	}
	else {
	echo "<script>alert('Image type is invalid')</script>";
	}
	
	
	$query = mysqli_query($con,$insert);
	
	if($query){
		
		echo "<script>alert('Hi,$name Congratulations,registeration is almost completed,please check your email for final 
		verification.')</script>";
	}
	
	else {
		
		echo "<script>alert('Registeration failed, please try again!</script>"; 
	}
	
	
	}

?>
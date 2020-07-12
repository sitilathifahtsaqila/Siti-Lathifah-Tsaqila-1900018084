<!DOCTYPE html>
<html>
<head>
	<title>webinar</title>
	<style type="text/css">
		.error {color: #FF0000;}
		body{
			background: -webkit-linear-gradient(bottom,#87CEFA, #F0F8FF);
		    background-repeat: no-repeat;

		}
		#card{
			width: 400px;
			height: 560px;
			background-color: #fbfbfb;
			padding: 10px;
			margin: 4rem auto 4rem auto;
			border-radius: 8px;
        	box-shadow: 1px 2px 4px rgba(0, 0, 0, 0.65);
		}
		#card-content{
			padding: 12px 40px;
		}
		#item{
			margin: 10px;

		}
		label{
			font-family: Georgia, serif; 
			font-size: 12pt;
		}
		#title{
			text-align: center;
		    letter-spacing: 3px;
		    padding-bottom: 15px;
		    padding-top: 10px;
		}
		.form {
		    align-items: left;
		    display: flex;
		    flex-direction: column;
		  	padding: 20px;
		}
		input{
		  	border: 1px solid #ccc;
		  	border-radius: 4px;
		  	resize: vertical;
		} 
		#submit{
			margin-top: 10px;
			border: none;
			padding: 8px 15px 8px 15px;
			background: #6495ED;
			color: #fff;
			box-shadow: 1px 1px 4px #DADADA;
			-moz-box-shadow: 1px 1px 4px #DADADA;
			-webkit-box-shadow: 1px 1px 4px #DADADA;
			border-radius: 3px;
			-webkit-border-radius: 3px;
			-moz-border-radius: 3px;
		}
		#submit:hover{
			background: #4169E1;
			color: #fff;
		} 

	</style>
</head>
<body>
	<?php

	$fnameErr = $lnameErr = $emailErr = $insErr = $proErr = "";
	$fname = $lname = $email = $ins = $pro = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  	if (empty($_POST["fname"])) {
	    	$fnameErr = "First Name is required";
	  	} else {
	    	$fname = test_input($_POST["fname"]);
	    	if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
	      		$fnameErr = "Only letters and white space allowed"; 
	    	}
		}

	  	if (empty($_POST["lname"])) {
	    	$lnameErr = "Last Name is required";
	  	} else {
	    	$lname = test_input($_POST["lname"]);
	    	if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
	      		$lnameErr = "Only letters and white space allowed";  
	    	}
		}

		if (empty($_POST["email"])) {
		    $emailErr = "Email is required";
		} else {
		    $email = test_input($_POST["email"]);
		  	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		      	$emailErr = "Invalid email format"; 
		    }
		}

		if (empty($_POST["ins"])) {
		   	$insErr = "Institution is required";
		} else {
		    $ins = test_input($_POST["ins"]);
		}
		
		if (empty($_POST["pro"])) {
		    $proErr = "Prodi is required";
		} else {
		    $pro = test_input($_POST["pro"]);
		}

	}

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}


	?>

	<div id="card">
	<form class="form" method="post" action="proses.php">
		<div id="title">
			<h2>FORM WEBINAR</h2>
		</div>
		<label >Nama Depan : </label>
		<input type="text" name="fname" id="item" value="<?php echo $fname;?>">
		<span class="error"><?php echo $fnameErr;?></span>

		<label >Nama Belakang : </label>
		<input type="text" name="lname" id="item" value="<?php echo $lname;?>">
		<span class="error"><?php echo $lnameErr;?></span>

		<label >Email : </label>
		<input type="email" name="email" id="item" value="<?php echo $email;?>">
		<span class="error"><?php echo $emailErr;?></span>

		<label >Institusi : </label>
		<input type="text" name="ins" id="item" value="<?php echo $ins;?>">
		<span class="error"><?php echo $insErr;?></span>

		<label >Prodi : </label>
		<input type="text" name="pro" id="item" value="<?php echo $pro;?>">
		<span class="error"><?php echo $proErr;?></span>

		<center>
		<label><span></span><input id="submit" type="submit" name="submit" value="Submit" /></label>
		</center>

	</form>
	</div>
</body>
</html>
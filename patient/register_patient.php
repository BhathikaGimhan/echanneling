<?php 
include('db.php');
?>
<?php
  if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$Address = $_POST['address'];
		$NIC_number = $_POST['nic'];
		$telephoneM = $_POST['tpm'];
		$telephoneH = $_POST['tph'];
		$email = $_POST['email'];
		$User_Name = $_POST['un'];
		$password = $_POST['pw'];
		$userCategory = 3;

        $encrypt = md5($password);
		
		$query="INSERT INTO userlogin (userName,password,userCategory) VALUES('".$User_Name."','".$encrypt."','".$userCategory."')";
		
	
	$query3 = "SELECT * FROM userlogin WHERE userName='".$User_Name."'";
				$result = mysqli_query($conn, $query3);
    			$rowss = mysqli_num_rows($result);
//Check if there are no duplicate Primary keys				
if($rowss >0){
				echo "<div id='myModal1' class='modal fade' role='dialog'>
					  <div class='modal-dialog'>
					
						<!-- Modal content-->
						<div class='modal-content'>
						  <div class='modal-header bg-danger text-white'>
							
							
							<h4 class='modal-title'>'".$User_Name."' is already Registed. </h4>
							<button type='button' class='close' data-dismiss='modal'>&times;</button>
						  </div>
						  <div class='modal-body'>
							<p>Try Again with Different UserName!!.</p>
						  </div>
						  <div class='modal-footer'>
							<button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>
						  </div>
						</div>
					
					  </div>
					</div> ";
	
}else{
	//execute insert userLogin						
    if (mysqli_query($conn, $query)) {
		$queryNew = mysqli_query($conn,"SELECT max(id) from userlogin" );  
		//get that id and Save other details
		while($row=mysqli_fetch_array($queryNew)){
					$lastid = $row['max(id)'];		
					$query2= "INSERT INTO patient(id,patientName,address,NIC,telNo,telHome,email) VALUES('".$lastid."','".$name."','".$Address."','".$NIC_number."','".$telephoneM."','".$telephoneH."','".$email."')";
					
					//insert in patient Table
					
					if(mysqli_query($conn, $query2)){
					echo "<div id='myModal1' class='modal fade' role='dialog'>
					  <div class='modal-dialog'>
					
						<!-- Modal content-->
						<div class='modal-content'>
						  <div class='modal-header bg-success text-white'>
							
							
							<h4 class='modal-title'>Success</h4>
							<button type='button' class='close' data-dismiss='modal'>&times;</button>
						  </div>
						  <div class='modal-body'>
							<p>Successfully Registered Patient!!.</p>
						  </div>
						  <div class='modal-footer'>
							<button type='button' class='btn btn-success' data-dismiss='modal'>Close</button>
						  </div>
						</div>
					
					  </div>
					</div> ";
					}
					
					else{
						echo "<div id='myModal1' class='modal fade' role='dialog'>
					  <div class='modal-dialog'>
					
						<!-- Modal content-->
						<div class='modal-content'>
						  <div class='modal-header bg-danger text-white'>
							
							
							<h4 class='modal-title'>Register Failed!</h4>
							<button type='button' class='close' data-dismiss='modal'>&times;</button>
						  </div>
						  <div class='modal-body'>
							<p>Try Again!!.</p>
						  </div>
						  <div class='modal-footer'>
							<button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>
						  </div>
						</div>
					
					  </div>
					</div> ";	
						
						
					}
					
					
			}
		} 
	
	}
		
		
	
            
   mysqli_close($conn);
  }
 ?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../src/css/bootstrap4/bootstrap.min.css">
  <script src="../src/js/jquery/331/jquery.min.js"></script>
  <script src="../src/js/bootstrap337/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../src/w3.css">
  
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 25px;
}


/* Change styles for cancel button and signup button on extra small screens */
}
</style>
</head>
<body>
<div id="container">
            
</div>

      <!--  <div class="w3-display-container w3-content img-responsive"  style="max-width:1500px; height:500px">
		
        <img src="images/b.jpg" alt="Table" class="w3-opacity-max" style="max-width:1500px; height:500px">
        </div>-->
        <br><br><br>
 <div class="container">
<form action="/action_page.php" style="border:5px solid #ccc">
  <div class="container" >
    <h1 class="w3-blue w3-padding">Welcome!</h1>
    
    <hr>
    
    
	<label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" >
    
    <label for="nic"><b>NIC Number</b></label>
    <input type="text" placeholder="Enter NIC number" name="nic" >
    
    <label for="phone_number"><b>Telephone</b></label>
    <input type="text" placeholder="Enter Telephone Number" name="tp" >
    
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
 </div>

</body>
<div class="navbar-fixed-bottom" style="padding-top:60px">
 <?php include 'footer.php'; ?>
</div>
</html>

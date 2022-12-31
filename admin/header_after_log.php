<?php

require('db.php');


?>
<!DOCTYPE html>
<html>
<head>
<title>Doctor Channelling</title>
    
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="src/w3.css">
<link rel="stylesheet" href="src/latin_font.css">    

    <link rel="stylesheet" href="src/web-fonts-with-css/css/fontawesome-all.css">
	<link rel="stylesheet" href="src/web-fonts-with-css/css/fontawesome-all.min.css">
<link rel="stylesheet" href="../src/css/bootstrap4/bootstrap.min.css">
<link rel="stylesheet" href="src/web-fonts-with-css/css/fontawesome-all.min.css">     
 




<head>
<body>
<!-- Navbar -->
<div class="w3-top ">
  <div class="w3-bar w3-indigo w3-card w3-padding ">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>

      <div class="w3-dropdown-hover w3-hide-small">
          <button class="w3-padding-large w3-button" title="More">MANAGE DOCTOR <i class="fa fa-caret-down"></i></button>
          <div class="w3-dropdown-content w3-bar-block w3-card-4">

          <a href="addAdoctor.php" class="w3-bar-item w3-button">Add Doctor</a>
          <a href="viewDoctor.php" class="w3-bar-item w3-button">Edit Doctor</a>


      </div>
      </div>

      
  <!--  <div class="w3-padding-large w3-hover-black w3-hide-small w3-right "><i class="fas fa-user-circle fa-2x "></i>&nbsp; <span class="w3-padding-16 ">Ruwan Wedisa</span></div>-->
    
    
						<!--<ul class="dropdown-menu">
                        <li><a href="#">Update Password</a></li>
                        <li><a href="#">Update Details</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">Log out</a></li>
                        
                    </ul>
						
						 </li>
     
 </ul> -->
 
 
<div class="w3-dropdown-hover w3-hide-small w3-hide-small w3-right">
		
      <button class=" w3-button"><i class="fas fa-user-circle fa-2x "></i>&nbsp;<i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="../logout.php" class="w3-bar-item w3-button">Log out</a>
      </div>
    </div>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

</div>



</body>

</html>
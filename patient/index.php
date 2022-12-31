<?php 
include('db.php');

	session_start();
	$uid=$_SESSION['sid4'];
	$userid = $_SESSION['userid'];
	if($uid==4){
		
	}
	else{
	header("location:../login_Form.php")	;
	}
	
?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="src/w3.css">
    <link rel="stylesheet" href="src/latin_font.css">
    <link rel="stylesheet" href="src/web-fonts-with-css/css/fontawesome-all.css">
    <link rel="stylesheet" href="src/web-fonts-with-css/css/fontawesome-all.min.css">

    <link rel="stylesheet" href="../src/css/bootstrap41/bootstrap.min.css">

    <script src="../src/js/jquery/331/jquery.min.js"></script>
    <script src="../src/js/popper.min.js"></script>
    <script src="../src/js/bootstrap41/bootstrap.min.js"></script>

    <script type="text/javascript" src="../src/moment.min.js"></script>



    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" />

    <style>
        
img {
    position: absolute;
    left: 0px;
    top: 0px;
    z-index: -1;
}
#show{
  border-radius: 30px;
  transition: 600ms;
}
#show:hover{
  box-shadow: 0 2px 10px black;
  
}
#show button{
  border-radius:30px;
}
.round{
  border-radius: 20px;
  transition: 500ms;
}
.round:hover{
  border-radius: 30px;
  box-shadow: 0 1px 10px black;
}
.heading{
  text-align: left;
  padding-top: 80px;
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
.cross{
  color: red;
  font-size: xx-large;
  font-weight: 900;
}
.imageBg{
  position: relative;
  left: 690px;
  top: -100px;
}
    </style>
</head>

<body>

<div id="container">
    <?php include 'header_after_log.php'; ?>
</div>


<div class="w3-display-container w3-content img-responsive"  style="max-width:1500px; height:500px">
		
        <!-- <img src="images/Global-Health-01.jpg" alt="Table" class="imge" style="max-width:2500px; height:740px"> -->
        
       <div class="container">
  <!-- Button to Open the Modal -->

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header w3-light-blue">
          <p class="modal-title" style="font-size:28px">You need to <strong>Login</strong> first</p>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body w3-padding"><p class="w3-text" style="font-size:17px">
          You can <a href="login_Form.php"><strong>Login Here</strong></a> Or	
          If you are new user <a href="register_patient.php"><strong>Sign Up</strong></a> Here.</p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<h1 class="heading"></h1>
<!-- <div class="img">
  <img src="img/logo.jpeg" alt="">
</div> -->

        <div class="w3-display-container row justify-content-md-center w3-padding w3-margin-top">  
            <form action="search_Doc_QuickMenu.php" id="show"  method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin " style="width:500px;">
            <h2 class="w3-center">Channel Your Doctor</h2>
            <div class="w3-row w3-section">
              <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user-md"></i></div>
                <div class="w3-rest">
                  <input class="form-control" id="name" name="name" placeholder="Doctor's Name" type="text"/>
                </div>
            </div>

            <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-stethoscope custom"></i></div>
              <div class="w3-rest">
                <!-- <input class="form-control" id="spec" name="spec" placeholder="Specialization" type="text"/> -->
                <select name="spec" class="w3-select w3-border" required >
                  <option value="">Specialization</option>
                  <?php
                    $specList = mysqli_query($conn,"select distinct speciality from doctor");
                    while($spec = mysqli_fetch_row($specList)){
                    if($spec[0] == 1){
                        $spec[0] = "Mental";
                    }
                    elseif ($spec[0] == 2){
                        $spec[0] = "Dental";
                    }
                    elseif ($spec[0] == 3){
                        $spec[0] = "VOG";
                    }
                  ?>
                    <option value="<?php echo $spec[0]; ?>"><?php echo $spec[0]; ?></option>
                  <?php
                    }
                  ?>
                </select>
              </div>
          </div>


                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-calendar"></i></div>

                    <div class="row">



                                <div class="input-group date" id="datetimepicker6" data-target-input="nearest">
                                    <input type="text" id="date" name="date" placeholder="MM/DD/YYYY"  class="form-control datetimepicker-input" data-target="#datetimepicker6" required/>
                                    <div class="input-group-append" data-target="#datetimepicker6" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>




                    </div>
                </div>









            
            <button type="submit" class="w3-btn w3-block w3-section w3-blue w3-ripple w3-padding" name="search">Search</button>
            </form>
        </div>
        </div>
 </div>
 <img src="../upload/Healthora logo png(1).png" class="imageBg" width="550px" height="450px" alt="">

  <br>
<!-- Footer -->
<div class="navbar-fixed-bottom">
    <?php include 'footer.php'; ?>
</div>

<!-- End page content -->







<!-- Include Date Range Picker -->
<script type="text/javascript" src="../src/js/date/bootstrap-datepicker.min.js"></script>




<script type="text/javascript">
    var dateToday = new Date();

    $(function() {

        $( "#datetimepicker6" ).datetimepicker({

            numberOfMonths: 3,
            showButtonPanel: true,
            minDate: dateToday,
            format: 'L'
        });
    });

</script>


</body>
</html> 



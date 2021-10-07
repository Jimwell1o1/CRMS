<?php
    session_start();

    
?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MCY Dental Clinic</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <style>
    

.bg-modal{
    width: 100%;
    height: 250%;
    background-color:rgba(0, 0, 0, 0.7);
    position: absolute;
    top: 65px;
    justify-content: center;
    display: none;
}

.bg-modal .modal-content{
    top: 20;
    width: 500px;
    height: 500px;
    background-color: white;
    border-radius: 4px;
    text-align: center;
    padding: 20px;
    position: relative;
}


.bg-modal .modal{
    margin: 15px auto;
	display: block;
	width: 75%;
	padding: 8px;
    border: 1px solid gray;
    font-family: sans-serif;
}


.close{
    position: absolute;
	top: 0;
	right: 10px;
	font-size: 42px;
	color: #333;
	transform: rotate(45deg);
	cursor: pointer;
	&:hover {
		color: #666;
	}
}

</style>



  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

    <body>
        
<?php

    //initialize variables into empty strings
    $nameErr =  $genderErr = $dateErr = $timeErr = $procedureErr = $branchErr = $message = $checked = "";
    $name =  $gender = $date = $time = $procedure = $branch = $checkedErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "GET" and isset($_GET['submit'])) { //if submit button is clicked this will be the action
        if (!empty($_GET["name"])){         //this is for the name validation
           
           if (!preg_match("/^[a-zA-Z-' ]*$/",$_GET["name"])) {
            $nameErr = "* Only letters and white space allowed";
          }
            else{
                $name = test_input($_GET["name"]);
            }
        }else{
           
           $nameErr = "* Name is required";
        }

        
        if (empty($_GET["gender"])){     //this is for the gender validation
          $genderErr = "* Gender is required";
       }else{
          $gender = test_input($_GET["gender"]);
       }
         
       if (empty($_GET["date"])){      //this is for the date validation
        $dateErr = "* Date is required";
     }else{
        $date = test_input($_GET["date"]);
     }  

        if (empty($_GET["time"])){      //this is for the time validation
            $timeErr = "* Time is required";
         }else{
            $time = test_input($_GET["time"]);
         } 

        if (empty($_GET["procedure"])){     //this is for the procedure validation
            $procedureErr = "* Procedure is required";
         }else{
            $procedure = test_input($_GET["procedure"]);
         } 

        if (empty($_GET["branch"])){    //this is for the branch validation
            $branchErr = "* Branch is required";
         }else{
            $branch = test_input($_GET["branch"]);
         }

         if (empty($_GET["message"])){    //this is for the branch validation
          
       }else{
          $message = test_input($_GET["message"]);
       }

        if (empty($_GET["checked"])){       //this is for the agreement if checked or not validation
            $checkedErr = "* Agreement is required";
         }else{
            $checked = test_input($_GET["checked"]);
         } 
    }
    function test_input($data) {    //calling function for getting and inserting the data
       
        return $data;
     }
?>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.php">MCY Dental Clinic</a></h1>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="booking.php">Set an Appointment</a></li>
    
          <li><a href="index.php">Back to Homepage</a></li>
          <?php
        if (isset($_SESSION["useruid"])) {
            # code...
            echo "<li class='drop-down'><a href=''> My Account | ". $_SESSION["useruid"] . "</a>";
            echo "<ul>";
            echo "<li><a href='user/profile.php'>My Profile</a></li>";
            echo "<li><a href='booking.php'>Set an Appointment</a></li>";
            echo "<li><a href='user/history.php'>History</a></li>";
            echo "<li><a href='forms/includes/logout.inc.php'>Log Out</a></li>";
            echo "</ul></li>";
        }
        else {
            # code...
            echo "<li><a href='forms/signup.php'>REGISTER</a></li>";
            echo "<li><a href='forms/login.php'>LOG IN</a></li>";
        }
       
    ?>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
  <br><br>
  <main id="main">
    <!-- ======= Contact Section ======= -->

    <section id="contact" class="contact" style="background-image: url('assets/img/3406301.jpg');background-size:cover;" >
      <div class="container" >

        <div class="section-title" data-aos="fade-up" >
          <h2>Set Appointment</h2>
          <p >Don't want to get stuck in line for hours just to set a clinical appointment? 
          <br> You wouldn't want to miss important dates, right?<br> <h6><b>Make an appointment now to <a href="">enjoy 5% off </a>on your first booking!</b></h6></p>
        </div>

     
        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-6">


            <form method="GET"  action="<?php echo ($_SERVER["PHP_SELF"]);?>">

            
              <div class="form-row">
              <h5>Appointment Details:</h5>
                <div class="col-md-12 form-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="text" name="name" class="form-control" placeholder="Enter your Name" value = "<?PHP print $name ; ?>" />
                  <span class="text-danger"> <?php echo $nameErr;?></span>
                  <div class="validate"></div>
                </div>
                <div class="col-md-12 form-group">
              <select class="form-control" name="gender[]">
                            <option value="" disabled selected>Select Gender</option>
                            <!-- TO KEEP THE DETAILS TYPED -------->    
                                <option value = "Male" <?php
                                  if(isset($_GET['submit']) && (!empty($_GET["gender"]))){
                                    
                                    $gender = isset($_GET['gender']) ? $_GET['gender'] : '';
                                    for($i = 0; $i < count($gender); $i++) {
                                        $final = $gender[$i];
                                      }  
                                    echo($final == 'Male') ? ' selected="selected"' : '';
                                    }?>
                                    >Male</option>
                         
                         <!-- TO KEEP THE DETAILS TYPED -------->        
                              <option value = "Female" <?php
                               if(isset($_GET['submit']) && (!empty($_GET["gender"]))){
                                    
                                $gender = isset($_GET['gender']) ? $_GET['gender'] : '';
                                for($i = 0; $i < count($gender); $i++) {
                                      $final = $gender[$i];
                                    }  
                                  echo($final == 'Female') ? ' selected="selected"' : '';
                                  }?>>Female</option>
                        </select>
                        <span class="text-danger"> <?php echo $genderErr;?></span>
                <div class="validate"></div>
              </div>
                <div class="col-md-6 form-group">
                  <input type="date" name="date" class="form-control"  value = "<?PHP print $date ; ?>"  />
                  <span class="text-danger"> <?php echo $dateErr;?></span>
                  <div class="validate"></div>
                </div>
                
                <div class="col-md-6 form-group">
                  <!-- <input type="time" class="form-control" name="time"  value = "<?PHP print $time ; ?>" />
                  <span class="text-danger"> <?php echo $timeErr;?></span>
                  <div class="validate"></div> -->

                  <select class="form-control" name="time[]">
                            <option value="" disabled selected>Select Time</option>
                            <!-- TO KEEP THE DETAILS TYPED -------->    
                                <option value = "8:00AM" <?php
                                  if(isset($_GET['submit']) && (!empty($_GET["time"]))){
                                    
                                    $time = isset($_GET['time']) ? $_GET['time'] : '';
                                    for($i = 0; $i < count($time); $i++) {
                                        $final = $time[$i];
                                      }  
                                    echo($final == '8:00AM') ? ' selected="selected"' : '';
                                    }?>
                                    >8:00AM</option>
                         
                         <!-- TO KEEP THE DETAILS TYPED -------->        
                              <option value = "9:00AM" <?php
                               if(isset($_GET['submit']) && (!empty($_GET["time"]))){
                                    
                                $time = isset($_GET['time']) ? $_GET['time'] : '';
                                for($i = 0; $i < count($time); $i++) {
                                      $final = $gender[$i];
                                    }  
                                  echo($final == '9:00AM') ? ' selected="selected"' : '';
                                  }?>>9:00AM</option>

                          <!-- TO KEEP THE DETAILS TYPED -------->        
                              <option value = "10:00AM" <?php
                               if(isset($_GET['submit']) && (!empty($_GET["time"]))){
                                    
                                $time = isset($_GET['time']) ? $_GET['time'] : '';
                                for($i = 0; $i < count($time); $i++) {
                                      $final = $gender[$i];
                                    }  
                                  echo($final == '10:00AM') ? ' selected="selected"' : '';
                                  }?>>10:00AM</option>
                          
                          <!-- TO KEEP THE DETAILS TYPED -------->        
                          <option value = "1:00PM" <?php
                               if(isset($_GET['submit']) && (!empty($_GET["time"]))){
                                    
                                $time = isset($_GET['time']) ? $_GET['time'] : '';
                                for($i = 0; $i < count($time); $i++) {
                                      $final = $gender[$i];
                                    }  
                                  echo($final == '1:00PM') ? ' selected="selected"' : '';
                                  }?>>1:00PM</option>
                          
                          <!-- TO KEEP THE DETAILS TYPED -------->        
                          <option value = "2:00PM" <?php
                               if(isset($_GET['submit']) && (!empty($_GET["time"]))){
                                    
                                $time = isset($_GET['time']) ? $_GET['time'] : '';
                                for($i = 0; $i < count($time); $i++) {
                                      $final = $gender[$i];
                                    }  
                                  echo($final == '2:00PM') ? ' selected="selected"' : '';
                                  }?>>2:00PM</option>
                            
                            <!-- TO KEEP THE DETAILS TYPED -------->        
                          <option value = "3:00PM" <?php
                               if(isset($_GET['submit']) && (!empty($_GET["time"]))){
                                    
                                $time = isset($_GET['time']) ? $_GET['time'] : '';
                                for($i = 0; $i < count($time); $i++) {
                                      $final = $gender[$i];
                                    }  
                                  echo($final == '3:00PM') ? ' selected="selected"' : '';
                                  }?>>3:00PM</option>

                            <!-- TO KEEP THE DETAILS TYPED -------->        
                          <option value = "4:00PM" <?php
                               if(isset($_GET['submit']) && (!empty($_GET["time"]))){
                                    
                                $time = isset($_GET['time']) ? $_GET['time'] : '';
                                for($i = 0; $i < count($time); $i++) {
                                      $final = $gender[$i];
                                    }  
                                  echo($final == '4:00PM') ? ' selected="selected"' : '';
                                  }?>>4:00PM</option>
                                  
                             <!-- TO KEEP THE DETAILS TYPED -------->        
                          <option value = "5:00PM" <?php
                               if(isset($_GET['submit']) && (!empty($_GET["time"]))){
                                    
                                $time = isset($_GET['time']) ? $_GET['time'] : '';
                                for($i = 0; $i < count($time); $i++) {
                                      $final = $gender[$i];
                                    }  
                                  echo($final == '5:00PM') ? ' selected="selected"' : '';
                                  }?>>5:00PM</option>
                        </select>
                        <span class="text-danger"> <?php echo $timeErr;?></span>
                <div class="validate"></div>

                </div>
              </div>
              
              <div class="form-group">
                <select class="form-control" id="consultation" class="input-field box" name="procedure[]" >
                <option value="" disabled selected>Select Procedure</option>

  
                             <!-- TO KEEP THE DETAILS TYPED Preventive Care-------->        
                             <option value = "Preventive Care" <?php
                               if(isset($_GET['submit']) && (!empty($_GET["procedure"]))){
                                    
                                $procedure = isset($_GET['procedure']) ? $_GET['procedure'] : '';
                                for($i = 0; $i < count($procedure); $i++) {
                                      $final = $procedure[$i];
                                    }  
                                  echo($final == 'Preventive Care') ? ' selected="selected"' : '';
                                  }?>>Preventive Care </option>

                                  <!-- TO KEEP THE DETAILS TYPED Restorative treatment-------->        
                             <option value = "Restorative Treatment" <?php
                               if(isset($_GET['submit']) && (!empty($_GET["procedure"]))){
                                    
                                $procedure = isset($_GET['procedure']) ? $_GET['procedure'] : '';
                                for($i = 0; $i < count($procedure); $i++) {
                                      $final = $procedure[$i];
                                    }  
                                  echo($final == 'Restorative Treatment') ? ' selected="selected"' : '';
                                  }?>>Restorative Treatment</option>

                                  <!-- TO KEEP THE DETAILS TYPED Periodontics-------->        
                             <option value = "Periodontics" <?php
                               if(isset($_GET['submit']) && (!empty($_GET["procedure"]))){
                                    
                                $procedure = isset($_GET['procedure']) ? $_GET['procedure'] : '';
                                for($i = 0; $i < count($procedure); $i++) {
                                      $final = $procedure[$i];
                                    }  
                                  echo($final == 'Periodontics') ? ' selected="selected"' : '';
                                  }?>>Periodontics</option>

                                  <!-- TO KEEP THE DETAILS TYPED Oral Surgery-------->        
                             <option value = "Oral Surgery" <?php
                               if(isset($_GET['submit']) && (!empty($_GET["procedure"]))){
                                    
                                $procedure = isset($_GET['procedure']) ? $_GET['procedure'] : '';
                                for($i = 0; $i < count($procedure); $i++) {
                                      $final = $procedure[$i];
                                    }  
                                  echo($final == 'Oral Surgery') ? ' selected="selected"' : '';
                                  }?>>Oral Surgery</option>

                                  <!-- TO KEEP THE DETAILS TYPED Veeners-------->        
                             <option value = "Veeners" <?php
                               if(isset($_GET['submit']) && (!empty($_GET["procedure"]))){
                                    
                                $procedure = isset($_GET['procedure']) ? $_GET['procedure'] : '';
                                for($i = 0; $i < count($procedure); $i++) {
                                      $final = $procedure[$i];
                                    }  
                                  echo($final == 'Veeners') ? ' selected="selected"' : '';
                                  }?>>Veeners</option>

                                  <!-- TO KEEP THE DETAILS TYPED Prosthodontics-------->        
                             <option value = "Prosthodontics" <?php
                               if(isset($_GET['submit']) && (!empty($_GET["procedure"]))){
                                    
                                $procedure = isset($_GET['procedure']) ? $_GET['procedure'] : '';
                                for($i = 0; $i < count($procedure); $i++) {
                                      $final = $procedure[$i];
                                    }  
                                  echo($final == 'Prosthodontics') ? ' selected="selected"' : '';
                                  }?>>Prosthodontics</option>

                                  <!-- TO KEEP THE DETAILS TYPED Orthodontic-------->        
                             <option value = "Orthodontic" <?php
                               if(isset($_GET['submit']) && (!empty($_GET["procedure"]))){
                                    
                                $procedure = isset($_GET['procedure']) ? $_GET['procedure'] : '';
                                for($i = 0; $i < count($procedure); $i++) {
                                      $final = $procedure[$i];
                                    }  
                                  echo($final == 'Orthodontic') ? ' selected="selected"' : '';
                                  }?>>Orthodontic</option>

                        </select>
                        <span class="text-danger"> <?php echo $procedureErr;?></span>
                <div class="validate"></div>
              </div>

              <div class="form-group">
              <select class="form-control" id="branch" class="input-field box" name="branch[]">

                            <option value="" disabled selected>Select Branch</option>

                             <!-- TO KEEP THE DETAILS TYPED Malinao-------->        
                             <option value = "Malinao" <?php
                               if(isset($_GET['submit']) && (!empty($_GET["branch"]))){
                                    
                                $branch = isset($_GET['branch']) ? $_GET['branch'] : '';
                                for($i = 0; $i < count($branch); $i++) {
                                      $final = $branch[$i];
                                    }  
                                  echo($final == 'Malinao') ? ' selected="selected"' : '';
                                  }?>>Malinao</option>

                                  <!-- TO KEEP THE DETAILS TYPED Pinagbuhatan-------->        
                             <option value = "Pinagbuhatan" <?php
                               if(isset($_GET['submit']) && (!empty($_GET["branch"]))){
                                    
                                $branch = isset($_GET['branch']) ? $_GET['branch'] : '';
                                for($i = 0; $i < count($branch); $i++) {
                                      $final = $branch[$i];
                                    }  
                                  echo($final == 'Pinagbuhatan') ? ' selected="selected"' : '';
                                  }?>>Pinagbuhatan</option>

                                  <!-- TO KEEP THE DETAILS TYPED San Joaquin-------->        
                             <option value = "San Joaquin" <?php
                               if(isset($_GET['submit']) && (!empty($_GET["procedure"]))){
                                    
                                $branch = isset($_GET['branch']) ? $_GET['branch'] : '';
                                for($i = 0; $i < count($branch); $i++) {
                                      $final = $branch[$i];
                                    }  
                                  echo($final == 'San Joaquin') ? ' selected="selected"' : '';
                                  }?>>San Joaquin</option>

                        </select>
                        <span class="text-danger"> <?php echo $branchErr;?></span>
                <div class="validate"></div>
              </div>

              

              <div class="form-group">
                <textarea class="form-control" maxlength="300" name="message" rows="5" placeholder="Message (Optional)" ><?php print $message; ?></textarea>
                <div class="validate"></div>
              </div>

              
             
              <div class="section-title">
              <p>Click  <a href="">Here </a> To Review MCY's Dental Clinic Data Privacy Notice.</p>
              <label><input type = "checkbox" name = "checked" <?php echo ($checked=='on')?'checked':'' ?>> I hereby give my full consent having reviewed and understood the Data Privacy Notice of MetroDental to allow the company to process my data in accordance to the Data Privacy Act of 2012. </label><br>
              <span class="text-danger"> <?php echo $checkedErr;?></span>
              <br>
          <div class="justify-content-center"><input class="btn btn-outline-primary" type="submit" name="submit" value="SUBMIT" data-toggle="modal" data-target="#exampleModal"></button></div>
       
        </div>

            </form>
          </div>

        </div>

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->


<!-- Modal -->
<!-- 
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Please check your details:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="text" class="col-md-6" value = "" disabled>
        <input class="col-md-6" type="text" placeholder="John Jimwell Rabino">
        <input class="col-md-6" type="text" placeholder="Male">
        <input class="col-md-6" type="text" placeholder="Dec 6, 2021">
        <input class="col-md-6" type="text" placeholder="12:45 PM">
        <input class="col-md-6" type="text" placeholder="Periodentics">
        <input class="col-md-6" type="text" placeholder="Brgy. Pinagbuhatan">

        <input class="col-md-6" type="text" placeholder="Message">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-outline-primary">Confirm</button>
      </div>
    </div>
  </div>
</div> -->




      </div>
      
    </section><!-- End Contact Section -->
            </main>
        <!-- <div class="booking-container">
            <a href="index.php"> <img src="images/logo.png" title="Home"> </a>
            <h1> Online Reservation </h1>
            <form class="form" action="bookingDetails.php" method="POST">
                <div class="booking-information">
                    <div class="information">

                        <input type="text" placeholder="Name" name="name">

                    </div>
                    <div class="information">
                        <label for="date"> Date </label> <br>
                        <input class="input-field" type="date" name="date" required>
                    </div>
                    <div class="information">
                        <label for="time"> Time (9am to 6pm) </label> <br>
                        <input class="input-field" type="time" min="09:00" max="18:00" name="time" required>
                    </div> 
                    <div class="information">
                        <label for="consultation"> Procedure </label> <br>
                        <select id="consultation" class="input-field box" name="consultation" required>
                            <option value="">Select Procedure</option>
                            <option value="Preventive Care"> Preventive Care </option>
                            <option value="Restorative treatment"> Restorative treatment </option>
                            <option value="Periodontics"> Periodontics </option>
                            <option value="Oral Surgery"> Oral Surgery </option>
                            <option value="Veeners"> Veeners </option>
                            <option value="Prosthodontics"> Prosthodontics </option>
                            <option value="Orthodontic"> Orthodontic </option>
                        </select>
                    </div>
                    <div class="information">
                        <label> Branches Locations </label> <br>
                        <select id="branch" class="input-field box" name="branches">
                            <option value=""> Select Branch:</option>
                            <option value="Pinagbuhatan"> Pinagbuhatan </option>
                            <option value="Rosario"> Rosario </option>
                            <option value="Malinao"> Malinao </option>
                        </select>
                    </div>
                    <div class="information">
                        <label for="payment"> Payment Mode </label> <br>
                        <select class="input-field box" name="payment" required>
                            <option value=""> </option>
                            <option value="Cash"> Cash </option>
                            <option value="Debit"> Debit </option>
                            <option value="Credit"> Credit </option>
                            <option value="Online Payment"> Online Payment </option>
                        </select>
                    </div>
                    <input class="submit-button" type="submit" name="submit" value="Book Now">
                </div>
            </form>
        </div> -->
      <!-- Vendor JS Files -->

<!-- THIS PART IS HIDDEN -------->
<!-- IF THE CONDITION IS TRUE THEN THIS WILL BE DISPLAYED AS THE DETAILS FORM -------->
<div class="bg-modal" style="height:160%;opacity: 1;display=none;">
        <div class="modal-content" style="height:600px;">
            <div class="close">+</div>
            
            <form action="includes/bookingDetails.inc.php" method="POST">
           
                <h5 class = "success">Please Check your details: </h5><br>
                <input type="text" name="name" class="form-control" value = "<?php echo ("Your Name is: " . $name); ?>" READONLY><br>

                <?php 
                $nameFinal = $name;
                $userName = $_SESSION["useruid"];
                $_SESSION["bookingUsername"] = $userName;
                $_SESSION["bookingName"] = $nameFinal; 
                $messageFinal = $message;
                $_SESSION["bookingMessage"] = $messageFinal;
                ?>
                <?php
                for($i = 0; $i < count($gender); $i++) {
                    $gender[$i];
                    $genderFinal = $gender[$i];
                    }
                    $_SESSION["bookingGender"] = $genderFinal;

                    $dateFinal = $date;
                    $_SESSION["bookingDate"] = $dateFinal;

                    

                    for($i = 0; $i < count($time); $i++) {
                      $time[$i];
                      $timeFinal = $time[$i];
                      }
                    $_SESSION["bookingTime"] = $timeFinal;

                    ?>
                <input name="gender" type="text" class="form-control" value = "<?php echo ("Your Gender is: " . $genderFinal); ?>" READONLY><br>
                <input name="date" type="text" class="form-control" value = "<?php echo ("The Date is: " . $date); ?>" READONLY ><br>
                <input name="time" type="text" class="form-control" value = "<?php echo ("Designated Time is: " . $timeFinal); ?>" READONLY><br>
                <?php
                for($i = 0; $i < count($procedure); $i++) {
                    $procedure[$i];
                    $procedureFinal = $procedure[$i];
                    }
                    $_SESSION["bookingConsultation"] = $procedureFinal;
                    ?>
                <input name="consultation" type="text" class="form-control" value = "<?php echo ("The Procedure is: " . $procedureFinal); ?>" READONLY><br>
                <?php
                for($i = 0; $i < count($branch); $i++) {
                    $branch[$i];
                    $branchFinal = $branch[$i];
                    }
                    $_SESSION["bookingBranch"] = $branchFinal;
                    ?>
                <input name="branches" type="text" class="form-control" value = "<?php echo ("The Branch is: " . $branchFinal); ?>" READONLY><br>
                
          
                <?php
               if(isset($_GET['message'])){
               
                    echo "<textarea name='message' type='text' class='form-control' READONLY>Your Message is: $messageFinal</textarea>";
            

                }
                    
                          ?>
                   
               <br>
        <button type="button" class="btn btn-outline-danger cancel">Cancel</button>
        <button  type="submit" name="confirm-submit" class="btn btn-outline-primary">Confirm</button>
      
            </form>
            
        </div>
    </div>
    <!-- END OF THE HIDDEN FORM -------->
  
     
<?php

if (isset($_GET['submit'])){  // if page is not submitted to itself echo the form
  //    $name =  $gender = $date = $time = $procedure = $branch = $checked = "";
  $name = isset($_GET['name']) ? $_GET['name'] : '';
  $gender = isset($_GET['gender']) ? $_GET['gender'] : '';
  $date = isset($_GET['date']) ? $_GET['date'] : '';
  $time = isset($_GET['time']) ? $_GET['time'] : '';
  $procedure = isset($_GET['procedure']) ? $_GET['procedure'] : '';
  $branch = isset($_GET['branch']) ? $_GET['branch'] : '';
  $checked = isset($_GET['checked']) ? $_GET['checked'] : '';
  $message = isset($_GET['message']) ? $_GET['message'] : '';


  if((!empty($_GET["name"])) and (!empty($_GET["gender"])) and (!empty($_GET["date"])) and (!empty($_GET["time"])) and (!empty($_GET["procedure"])) and  (!empty($_GET["checked"])) ){


                            ?>

  <script>
   document.querySelector('.bg-modal').style.display = 'flex';
   </script>
    
<?php
}
}

 ?>

<script>
document.querySelector('.close').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "none";
});

document.querySelector('.cancel').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "none";
});
</script>

  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>


<?php
    session_start();
    require_once '../../includes/dbh.inc.php';
    require_once '../../includes/emptySession.php';
    
    emptyUserSignupSession();
    
    if (!isset($_SESSION['useruid'])){
    header("Location: ../login.php?error=loginerror");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MCY Dental Clinic</title>
  <meta content="" name="description">
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
  <link href="../../assets/appointmentAssets/img/favicon.png" rel="icon">
  <link href="../../assets/appointmentAssets/img/apple-touch-icon.png" rel="apple-touch-icon">

 <!-- Google Fonts -->
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../assets/appointmentAssets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/appointmentAssets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../../assets/appointmentAssets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/appointmentAssets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../../assets/appointmentAssets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../../assets/appointmentAssets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../../assets/appointmentAssets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../assets/css/style2.css" rel="stylesheet">

  
  <!-- JS FOR DISABLE PAST DATE -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script>

    $(document).ready(function(){
      $(function(){
        var dtToday = new Date();

        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();

        var maxDate= year + '-' + month + '-' + day;
        $('#dateControl').attr('min', maxDate);
      });
    })

  </script>


 
</head>

<body>

<?php

    //initialize variables into empty strings
    $nameErr = $emailErr = $genderErr = $dateErr = $timeErr = $procedureErr = $branchErr = $message = $checked = "";
    $name = $email = $gender = $date = $time = $procedure = $branch = $checkedErr = "";

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

        if (!empty($_GET["email"])){  //this is for the email validation

         if (!filter_var($_GET["email"], FILTER_VALIDATE_EMAIL)){    
          $emailErr = "* Invalid email format";
        }else{
          $email = test_input($_GET["email"]);
       } 
      }else{
           
        $emailErr = "* email is required";
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
        <h1 class="text-light"><a href="../../index.php">MCY Dental Clinic</a></h1>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#appointment">Book Now</a></li>
          <li><a href="#featured-services">Services</a></li>
          <li><a href="#departments">Branches</a></li>
        
          <?php
        if (isset($_SESSION["useruid"])) {
            # code...
            echo "<li class='drop-down'><a href=''> My Account | ". $_SESSION["useruid"] . "</a>";
            echo "<ul>";
            echo "<li><a href='../../user/profile.php'>My Profile</a></li>";
            echo "<li><a href='index.php'>Set an Appointment</a></li>";
            echo "<li><a href='../../user/history.php'>History</a></li>";
            echo "<li><a href='../../forms/includes/logout.inc.php'>Log Out</a></li>";
            echo "</ul></li>";
        }
        else {
            # code...
            echo "<li><a href='../../forms/signup.php'>REGISTER</a></li>";
            echo "<li><a href='../../forms/login.php'>LOG IN</a></li>";
        }
       
    ?>

        </ul>
      </nav>
    </div>
  </header><!-- End Header -->

 

  <main id="main">

    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
      <div class="container" data-aos="fade-up">
      <br><br>
        <div class="section-title">
          <h2>Make an Appointment</h2>

          <p>Don't want to get stuck in line for hours just to set a clinical appointment? 
           
          <br> You wouldn't want to miss important dates, right?<br> <h6>Make an appointment now to <a href="">enjoy 5% off </a>on your first booking!</h6></p>
        </div>
        <?php
        if (isset($_GET["error"])) {
            # code...
            if ($_GET["error"] == "stmtfailed") {
                # code...
                echo "<div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&plus;</button>
              Appointment Scheduling failed. Please try again later.
            </div>";
            } 
          }
            ?>

        <form action="<?php echo ($_SERVER["PHP_SELF"]);?>" method="GET"  data-aos="fade-up" data-aos-delay="100">
          <h4>Patient Details</h4><br>
          <div class="form-row">
            
            <div class="col-md-5 form-group">
              <h6>Name:</h6>
              <input type="text" value = "<?PHP print $name ; ?>"  name="name" class="form-control" id="name" placeholder="Patient or Parent Name" data-rule="minlen:4" data-msg="Please enter Patient name">
              <span class="text-danger"> <?php echo $nameErr;?></span>
              <div class="validate"></div>
            </div>

            <div class="col-md-5 form-group">
              <h6>Email:</h6>
              <input type="text" value = "<?PHP print $email ; ?>"  name="email" class="form-control" id="email" placeholder="Email Address" data-rule="minlen:4" data-msg="Please enter Patients email">
              <span class="text-danger"> <?php echo $emailErr;?></span>
              <div class="validate"></div>
            </div>

            <div class="col-md-2 form-group">
              <h6>Gender:</h6>
              <select class="form-control" name="gender[]">
                            <option value="" disabled selected >Select Gender</option>
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
            </div>


            

          </div>
          <br><Br>
          <h4>Appointment Details</h4>
          <br>
          <div class="form-row">
            
            <div class="col-md-6 form-group">
              <h6>Date:</h6>
              <input type="date" id = "dateControl" name="date" class="form-control"  value = "<?PHP print $date ; ?>"  />
                  <span class="text-danger"> <?php echo $dateErr;?></span>
                  <div class="validate"></div>
                                </div>


          
            <div class="col-md-6 form-group">
              <h6>Time:</h6>
              <select class="form-control" name="time[]">
                            <option value="" disabled selected>Select Time</option>
                            <!-- TO KEEP THE DETAILS TYPED -------->    
                                <option value = "8:00 AM" <?php
                                  if(isset($_GET['submit']) && (!empty($_GET["time"]))){
                                    
                                    $time = isset($_GET['time']) ? $_GET['time'] : '';
                                    for($i = 0; $i < count($time); $i++) {
                                        $final = $time[$i];
                                      }  
                                    echo($final == '8:00 AM') ? ' selected="selected"' : '';
                                    }?>
                                    >8:00 AM</option>
                         
                         <!-- TO KEEP THE DETAILS TYPED -------->    
                         <option value = "9:00 AM" <?php
                                  if(isset($_GET['submit']) && (!empty($_GET["time"]))){
                                    
                                    $time = isset($_GET['time']) ? $_GET['time'] : '';
                                    for($i = 0; $i < count($time); $i++) {
                                        $final = $time[$i];
                                      }  
                                    echo($final == '9:00 AM') ? ' selected="selected"' : '';
                                    }?>
                                    >9:00 AM</option>

                         <!-- TO KEEP THE DETAILS TYPED -------->    
                         <option value = "10:00 AM" <?php
                                  if(isset($_GET['submit']) && (!empty($_GET["time"]))){
                                    
                                    $time = isset($_GET['time']) ? $_GET['time'] : '';
                                    for($i = 0; $i < count($time); $i++) {
                                        $final = $time[$i];
                                      }  
                                    echo($final == '10:00 AM') ? ' selected="selected"' : '';
                                    }?>
                                    >10:00 AM</option>
                          
                          <!-- TO KEEP THE DETAILS TYPED -------->    
                         <option value = "1:00 PM" <?php
                                  if(isset($_GET['submit']) && (!empty($_GET["time"]))){
                                    
                                    $time = isset($_GET['time']) ? $_GET['time'] : '';
                                    for($i = 0; $i < count($time); $i++) {
                                        $final = $time[$i];
                                      }  
                                    echo($final == '1:00 PM') ? ' selected="selected"' : '';
                                    }?>
                                    >1:00 PM</option>
                          
                         <!-- TO KEEP THE DETAILS TYPED -------->    
                         <option value = "2:00 PM" <?php
                                  if(isset($_GET['submit']) && (!empty($_GET["time"]))){
                                    
                                    $time = isset($_GET['time']) ? $_GET['time'] : '';
                                    for($i = 0; $i < count($time); $i++) {
                                        $final = $time[$i];
                                      }  
                                    echo($final == '2:00 PM') ? ' selected="selected"' : '';
                                    }?>
                                    >2:00 PM</option>
                            
                            <!-- TO KEEP THE DETAILS TYPED -------->    
                         <option value = "3:00 PM" <?php
                                  if(isset($_GET['submit']) && (!empty($_GET["time"]))){
                                    
                                    $time = isset($_GET['time']) ? $_GET['time'] : '';
                                    for($i = 0; $i < count($time); $i++) {
                                        $final = $time[$i];
                                      }  
                                    echo($final == '3:00 PM') ? ' selected="selected"' : '';
                                    }?>
                                    >3:00 PM</option>

                            <!-- TO KEEP THE DETAILS TYPED -------->    
                         <option value = "4:00 PM" <?php
                                  if(isset($_GET['submit']) && (!empty($_GET["time"]))){
                                    
                                    $time = isset($_GET['time']) ? $_GET['time'] : '';
                                    for($i = 0; $i < count($time); $i++) {
                                        $final = $time[$i];
                                      }  
                                    echo($final == '4:00 PM') ? ' selected="selected"' : '';
                                    }?>
                                    >4:00 PM</option>
                                  
                            <!-- TO KEEP THE DETAILS TYPED -------->    
                         <option value = "5:00 PM" <?php
                                  if(isset($_GET['submit']) && (!empty($_GET["time"]))){
                                    
                                    $time = isset($_GET['time']) ? $_GET['time'] : '';
                                    for($i = 0; $i < count($time); $i++) {
                                        $final = $time[$i];
                                      }  
                                    echo($final == '5:00 PM') ? ' selected="selected"' : '';
                                    }?>
                                    >5:00 PM</option>
                        </select>
                        <span class="text-danger"> <?php echo $timeErr;?></span>
                <div class="validate"></div>
            </div>
          </div>
          
          <br>
          <br>
          <div class="form-row">
            <div class="col-md-6 form-group">
              <h6>Procedure/Dental Service:</h6>
              <select class="form-control" id="consultation" class="input-field box" name="procedure[]" >
                <option value="" disabled selected>Select Procedure</option>

  
                             <!-- TO KEEP THE DETAILS TYPED Oral Prophylaxis-------->        
                             <option value = "Oral Prophylaxis" <?php
                               if(isset($_GET['submit']) && (!empty($_GET["procedure"]))){
                                    
                                $procedure = isset($_GET['procedure']) ? $_GET['procedure'] : '';
                                for($i = 0; $i < count($procedure); $i++) {
                                      $final = $procedure[$i];
                                    }  
                                  echo($final == 'Oral Prophylaxis') ? ' selected="selected"' : '';
                                  }?>>Oral Prophylaxis</option>

                                  <!-- TO KEEP THE DETAILS TYPED Tooth Restoration-------->        
                             <option value = "Tooth Restoration" <?php
                               if(isset($_GET['submit']) && (!empty($_GET["procedure"]))){
                                    
                                $procedure = isset($_GET['procedure']) ? $_GET['procedure'] : '';
                                for($i = 0; $i < count($procedure); $i++) {
                                      $final = $procedure[$i];
                                    }  
                                  echo($final == 'Tooth Restoration') ? ' selected="selected"' : '';
                                  }?>>Tooth Restoration</option>

                                  <!-- TO KEEP THE DETAILS TYPED Tooth Extraction-------->        
                             <option value = "Tooth Extraction" <?php
                               if(isset($_GET['submit']) && (!empty($_GET["procedure"]))){
                                    
                                $procedure = isset($_GET['procedure']) ? $_GET['procedure'] : '';
                                for($i = 0; $i < count($procedure); $i++) {
                                      $final = $procedure[$i];
                                    }  
                                  echo($final == 'Tooth Extraction') ? ' selected="selected"' : '';
                                  }?>>Tooth Extraction</option>

                                  <!-- TO KEEP THE DETAILS TYPED Flouride Application-------->        
                             <option value = "Flouride Application" <?php
                               if(isset($_GET['submit']) && (!empty($_GET["procedure"]))){
                                    
                                $procedure = isset($_GET['procedure']) ? $_GET['procedure'] : '';
                                for($i = 0; $i < count($procedure); $i++) {
                                      $final = $procedure[$i];
                                    }  
                                  echo($final == 'Flouride Application') ? ' selected="selected"' : '';
                                  }?>>Flouride Application</option>

                                  <!-- TO KEEP THE DETAILS TYPED Prosthodontic Treatment-------->        
                             <option value = "Prosthodontic Treatment" <?php
                               if(isset($_GET['submit']) && (!empty($_GET["procedure"]))){
                                    
                                $procedure = isset($_GET['procedure']) ? $_GET['procedure'] : '';
                                for($i = 0; $i < count($procedure); $i++) {
                                      $final = $procedure[$i];
                                    }  
                                  echo($final == 'Prosthodontic Treatment') ? ' selected="selected"' : '';
                                  }?>>Prosthodontic Treatment</option>

                                  <!-- TO KEEP THE DETAILS TYPED Orthodontic Treatment-------->        
                             <option value = "Orthodontic Treatment" <?php
                               if(isset($_GET['submit']) && (!empty($_GET["procedure"]))){
                                    
                                $procedure = isset($_GET['procedure']) ? $_GET['procedure'] : '';
                                for($i = 0; $i < count($procedure); $i++) {
                                      $final = $procedure[$i];
                                    }  
                                  echo($final == 'Orthodontic Treatment') ? ' selected="selected"' : '';
                                  }?>>Orthodontic Treatment</option>

                                  <!-- TO KEEP THE DETAILS TYPED Periodontic Rehab-------->        
                             <option value = "Periodontic Rehab" <?php
                               if(isset($_GET['submit']) && (!empty($_GET["procedure"]))){
                                    
                                $procedure = isset($_GET['procedure']) ? $_GET['procedure'] : '';
                                for($i = 0; $i < count($procedure); $i++) {
                                      $final = $procedure[$i];
                                    }  
                                  echo($final == 'Periodontic Rehab') ? ' selected="selected"' : '';
                                  }?>>Periodontic Rehab</option>

                        </select>
                        <span class="text-danger"> <?php echo $procedureErr;?></span>
                <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group">
              <h6>Branch:</h6>
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
  
          </div>


          <div class="form-group">
            <textarea class="form-control" maxlength="300" name="message" rows="5" placeholder="Message (Optional)" ><?php print $message; ?></textarea>
            <div class="validate"></div>
          </div>


          <div class="form-group">
          
          
          <label><input type = "checkbox" name = "checked" <?php echo ($checked=='on')?'checked':'' ?>> Click  <a href="">Here </a> To Review MCY's Dental Clinic Data Privacy Notice.
              I hereby give my full consent having reviewed and understood the Data Privacy Notice of MCY Dental Clinic to allow the company to process my data in accordance to the Data Privacy Act of 2012. </label><br>
              <span class="text-danger"> <?php echo $checkedErr;?></span>
              <br>

          </div>
          <div class="form-group">
          

        </div>

          

          <div class="text-center">
            <button  class="btn btn-success"  type="submit" name="submit" data-toggle="modal" data-target="#exampleModal" data-backdrop="static">
            Make an Appointment
             </button>
          </div>

         
        </form>

      </div>



      <!-- THIS PART IS HIDDEN -------->
<!-- IF THE CONDITION IS TRUE THEN THIS WILL BE DISPLAYED AS THE DETAILS FORM -------->
<div class="bg-modal" style="height:150%;opacity: 1;display=none;margin-top:55px;">
        <div class="modal-content" style="height:630px;">
            <div class="close">+</div>
            
            <form action="../../includes/bookingDetails.inc.php" method="POST">
           
           <h4 style="text-align:left;" class = "success">PLEASE CHECK YOUR DETAILS: </h4>
           <hr>
           <br>
           <input type="text" name="name" class="form-control" value = "<?php echo ("Your Name is: " . $name); ?>" READONLY><br>

           <?php 
           $nameFinal = $name;
           $userName = $_SESSION["useruid"];
           $_SESSION["bookingUsername"] = $userName;
           $_SESSION["bookingName"] = $nameFinal; 
           
           $emailFinal = $email;
           $_SESSION["bookingemail"] = $emailFinal; 

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
                
                <input name="email" type="text" class="form-control" value = "<?php echo ("Your Email is: " . $email); ?>" READONLY><br>
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
        <button  type="submit" name="confirm-submit" class="btn btn-primary">Confirm</button>
        <button type="button" class="btn btn-danger cancel">Cancel</button>
        
      
            </form>
            
        </div>
    </div>
    <!-- END OF THE HIDDEN FORM -------->


    <?php

if (isset($_GET['submit'])){  // if page is not submitted to itself echo the form
  //    $name =  $gender = $date = $time = $procedure = $branch = $checked = "";
  $name = isset($_GET['name']) ? $_GET['name'] : '';
  $email = isset($_GET['email']) ? $_GET['email'] : '';
  $gender = isset($_GET['gender']) ? $_GET['gender'] : '';
  $date = isset($_GET['date']) ? $_GET['date'] : '';
  $time = isset($_GET['time']) ? $_GET['time'] : '';
  $procedure = isset($_GET['procedure']) ? $_GET['procedure'] : '';
  $branch = isset($_GET['branch']) ? $_GET['branch'] : '';
  $checked = isset($_GET['checked']) ? $_GET['checked'] : '';
  $message = isset($_GET['message']) ? $_GET['message'] : '';


  if((!empty($_GET["name"])) and (!empty($_GET["email"])) and (!empty($_GET["gender"])) and (!empty($_GET["date"])) and (!empty($_GET["time"])) and (!empty($_GET["procedure"])) and  (!empty($_GET["checked"])) ){


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


    </section><!-- End Appointment Section -->


    
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          
          <h3>In an emergency? Need help now?</h3>
          <p> Having trouble waiting on hold for a long time then not having available time slots?</p>
          <p>For other concerns please reach us at: clinicmcydental@gmail.com</p>
          <a class="cta-btn scrollto" href="../../index.php#contact">CALL US NOW!</a>
          
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="icofont-heart-beat"></i></div>
              <h4 class="title"><a href="">COMFORT</a></h4>
              <p class="description">We care for your safety and our goal is to do our best to place you in a comfortable state while meeting your needs. We love taking care of our customers because that's what they deserve.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="icofont-drug"></i></div>
              <h4 class="title"><a href="">MEDICATION</a></h4>
              <p class="description">Our goal is to provide great medication with affordable prices. We only want what's best for you. So don't settle for less, we got it all for you! We commit to take care of your necessity while doing our job with compassion.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="icofont-thermometer-alt"></i></div>
              <h4 class="title"><a href="">SAFETY</a></h4>
              <p class="description">Not only we care for your comfortability but we also care for your safety. During this pandemic, we make sure that our customers feel safe by doing safety procedures. By this, we can monitor our customer's health and security.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="icofont-dna-alt-1"></i></div>
              <h4 class="title"><a href="">INNOVATION</a></h4>
              <p class="description">We are committed to using innovative and useful technology for customer's satisfaction. We use different modern tools to perform different dental services.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Branches</h2>
          <p>You can also visit our branches in places near you! Just drop by in any branches and feel free to transact with us!</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                  <h4>SAN JOAQUIN</h4>
                  <p>Contacts:(02)8640-5536 </p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-2">
                  <h4>PINAGBUHATAN</h4>
                  <p>Contacts:(02)8984-47311 .</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-3">
                  <h4>MALINAO</h4>
                  <p>Contacts:(02)8656-0856</p>
                </a>
              </li>

            </ul>
          </div>
          <div class="col-lg-8">
            <divlass="col-lg-8">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <h3>San Joaquin, Pasig City</h3>
                <p class="font-italic"><b>Address:</b> 9M Conception St. San Joaquin 1601 Pasig, Philippines</p>
             
                <p><b>Email Address:</b> mcysanjoaquin@gmail.com</p>
                <p><b>Schedule:</b> 9:00am to 5:00pm</p>
                <p><b>Facebook Page:</b> <a href = "https://www.facebook.com/MCYdentalSJ/">MCY Dental Clinic San Joaquin </a></p>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.821201242739!2d121.07188731478861!3d14.552215089833268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9a28bc76061%3A0x8796bdc6a86e55fe!2sMCY%20Dental%20Clinic%20San%20Joaquin!5e0!3m2!1sen!2sph!4v1634487024503!5m2!1sen!2sph" width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
       
 </div>
              <div class="tab-pane" id="tab-2">
                <h3>Pinagbuhatan, Pasig City</h3>
                <p class="font-italic"><b>Address: </b>22 Urbano Velasco Ave St. 1602 Pasig, Philippines</p>
                <p><b>Email Address:</b> mcypinagbuhatan@gmail.com</p>
                <p><b>Schedule:</b> 9:00am to 5:00pm</p>
                <p><b>Facebook Page:</b> <a href = "https://www.facebook.com/MCYPinagbuhatan/">MCY Dental Clinic Pinagbuhatan </a></p>
                
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d380.3762212109789!2d121.08532588294001!3d14.557185442325617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c7d2f04ccc9b%3A0xe1001ce5191eb0a5!2sMCY%20Dental!5e0!3m2!1sen!2sph!4v1634487131612!5m2!1sen!2sph" width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
              <div class="tab-pane" id="tab-3">
                <h3>Malinao, Pasig City</h3>
                <p class="font-italic"><b>Address:</b> 30 Caruncho Ave, Malinao, Pasig, 1600 Metro Manila</p>
                <p><b>Email Address:</b> mcymalinao@gmail.com</p>
                <p><b>Schedule:</b> 9:00am to 5:00pm</p>
                <p><b>Facebook Page:</b> <a href = "https://www.facebook.com/MCYMalinao/?ref=page_internal">MCY Dental Clinic Malinao </a></p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1566.0715030697377!2d121.07896672398165!3d14.559557020682753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c7d5fce0f3a5%3A0x7d7d0d04075f188f!2sMCY%20Dental!5e0!3m2!1sen!2sph!4v1634487340114!5m2!1sen!2sph" width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Departments Section -->

  

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>MCY Dental Clinic</h3>
              <p>
                Buting<br>
                Pasig City,PH<br><br>
                <strong>Phone:</strong> +(02) 640 5536<br>
                <strong>Email:</strong> clinicmcydental@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="../../index.php#about">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../../index.php#steps">How to appoint?</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../../index.php#priorities">Priorities</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../../index.php#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../../index.php#portfolio">Gallery</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../../index.php#contact">Contact Us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="../../index.php#services">Consultation</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../../index.php#services">Oral Prophylaxis</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../../index.php#services">Tooth Restoration</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../../index.php#services">Tooth Extraction</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../../index.php#services">Flouride Application</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../../index.php#services">Prosthodontic Treatment</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../../index.php#services">Orthodontic Treatment</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../../index.php#services">Periodontic Rehab</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Have us subscribe on our newsletter!</p>
            <form action="../signup.php" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>CRMS on MCY Dental Clinic</span></strong>. All Rights Reserved
      </div>
    
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="../../assets/appointmentAssets/vendor/jquery/jquery.min.js"></script>
  <script src="../../assets/appointmentAssets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/appointmentAssets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../../assets/appointmentAssets/vendor/php-email-form/validate.js"></script>
  <script src="../../assets/appointmentAssets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../../assets/appointmentAssets/vendor/counterup/counterup.min.js"></script>
  <script src="../../assets/appointmentAssets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../../assets/appointmentAssets/vendor/venobox/venobox.min.js"></script>
  <script src="../../assets/appointmentAssets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../../assets/appointmentAssets/js/main.js"></script>

  <script src="../../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../../assets/vendor/php-email-form/validate.js"></script>
  <script src="../../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../../assets/vendor/aos/aos.js"></script>





</body>

</html>
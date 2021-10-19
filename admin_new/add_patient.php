<?php
    session_start();
    require_once '../includes/dbh.inc.php';
    require_once '../includes/emptySession.php';

    emptyUserSignupSession();

 if (!isset($_SESSION['admin_branchName'])){
  header("Location: ../admin/login-admin.php");
  die();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Add Patient - Admin</title>
    <?php
        include 'includes/style-links.php';
    ?> 


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
  <body class="sb-nav-fixed">
  <?php include "includes/navbar.php"; ?> <!--==== NAV BAR ====-->

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

      <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid px-4">
            <h1 class="mt-4">Add Patient</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item">
                <a href="index.html">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Add Patient</li>
            </ol>
            
          <label for="basic-url" class="form-label">General Information</label>

          <form  action="<?php echo ($_SERVER["PHP_SELF"]);?>" method="GET">

          <div class="row">
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">Patient Name</span>
              <input type="text" value = "<?PHP print $name ; ?>" name = "name" class="form-control" placeholder="Full Name" aria-label="Username" aria-describedby="basic-addon1">
              <span class="text-danger"> <?php echo $nameErr;?></span>
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">Gender</span>
              <select name="gender[]" class="form-select" aria-label="Default select example">
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
          </div>
            
            

            <label for="basic-url" class="form-label">Schedule Information</label>


            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">Schedule Date</span>
              <input id = "dateControl" name="date"  value = "<?PHP print $date ; ?>" type="date" class="form-control">
              <span class="text-danger"> <?php echo $dateErr;?></span>
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">Schedule Time</span>
              <select name="time[]" class="form-select">
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

            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">Procedure/Dental Service</span>
              <select name="procedure[]"  class="form-select">
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
              </select>
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">Dental Branch</span>
              <select class="form-select" name="branch[]">
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


  
            

            <div class="col-auto">
            <button  class="btn btn-primary"  type="submit" name="submit" data-toggle="modal" data-target="#exampleModal" data-backdrop="static">
            Make an Appointment
             </button>
            </div>
            
                  </form>
        
              <!-- THIS PART IS HIDDEN -------->
<!-- IF THE CONDITION IS TRUE THEN THIS WILL BE DISPLAYED AS THE DETAILS FORM -------->
<div class="bg-modal" style="height:150%;opacity: 1;display=none;margin-top:55px;">
        <div class="modal-content" style="height:630px;">
            <div class="close">+</div>
            
            <form action="../includes/bookingDetails-admin.inc.php" method="POST">
           
           <h4 style="text-align:left;" class = "success">PLEASE CHECK YOUR DETAILS: </h4>
           <hr>
           <br>
           <input type="text" name="name" class="form-control" value = "<?php echo ("Your Name is: " . $name); ?>" READONLY><br>

           <?php 
           $nameFinal = $name;
 
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
          $gender = isset($_GET['gender']) ? $_GET['gender'] : '';
          $date = isset($_GET['date']) ? $_GET['date'] : '';
          $time = isset($_GET['time']) ? $_GET['time'] : '';
          $procedure = isset($_GET['procedure']) ? $_GET['procedure'] : '';
          $branch = isset($_GET['branch']) ? $_GET['branch'] : '';




          if((!empty($_GET["name"])) and (!empty($_GET["gender"])) and (!empty($_GET["date"])) and (!empty($_GET["time"])) and (!empty($_GET["procedure"]))){


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

                  


        </main>
        <footer class="py-4 bg-light mt-auto">
          <div class="container-fluid px-4">
            <div
              class="d-flex align-items-center justify-content-between small"
            >
              <div class="text-muted">Copyright &copy; Your Website 2021</div>
              <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="js/scripts.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

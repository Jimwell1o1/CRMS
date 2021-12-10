<tr>
  <th scope="row"> <?php echo $row['bookingName'] ?> </th>
  <td> <?php echo $row['bookingGender'] ?> </td>
  <td> <?php echo $row['bookingemail'] ?> </td>
    <td> <?php echo date('M-d-Y', strtotime($row['bookingDate'])); ?> </td>
    <td> <?php echo $row['bookingTime'] ?> </td>
    <td> <?php echo $row['bookingConsultation'] ?> </td>
    <td> <?php echo $row['bookingBranch'] ?> </td>  
    <td class="text-left">
        <form action="../includes/updateAcceptedData.php?bookingId=<?php echo htmlspecialchars($row['bookingId'])?>" method="POST">
        <div class = "d-flex p-1">
        <button type="button" class="btn btn-info"  data-bs-toggle="modal" data-bs-target="#update_modal<?php echo $row['bookingId'] ?>">
     <i class="fas fa-edit"></i>
    </button>
    <label>&nbsp;</label>
        <input type="hidden" name="username" value="<?php echo htmlspecialchars($row['bookingName'])?>" >
        <input type="hidden" name="useremail" value="<?php echo htmlspecialchars($row['bookingemail'])?>" >
        <input type="hidden" name="usertime" value="<?php echo htmlspecialchars($row['bookingTime'])?>" >
        <input type="hidden" name="userdate" value="<?php echo htmlspecialchars($row['bookingDate'])?>" >
        <input type="hidden" name="userbranch" value="<?php echo htmlspecialchars($row['bookingBranch'])?>" >
        <button class="btn btn-success" id="accept-button" name="submit" onclick="return confirm('Are you sure you want to accept this record?');">
            <i class="fas fa-check-circle"></i>
            </button> 
            <label>&nbsp;</label>
            <button class="btn btn-danger" name="delete" onclick="return confirm('Are you sure you want to delete this record?');">
            <i class="fas fa-trash-alt"></i>
            </button>

            <label>&nbsp;</label>
        </form> 
        <!-- <form action="includes/email-confirmbooking.inc.php" method="POST">
        <input type="hidden" name="username" value="<?php echo htmlspecialchars($row['bookingName'])?>" >
        <input type="hidden" name="useremail" value="<?php echo htmlspecialchars($row['bookingemail'])?>" >
        <input type="hidden" name="usertime" value="<?php echo htmlspecialchars($row['bookingTime'])?>" >
        <input type="hidden" name="userdate" value="<?php echo htmlspecialchars($row['bookingDate'])?>" >
            <button type="submit" class="btn btn-primary">
                  <i class="fas fa-bell"></i>
                </button>
                </div>
          </form> -->
  </td>
</tr>

<!-- Modal -->
<div class="modal fade" id="update_modal<?php echo $row['bookingId'] ?>" tabindex="-1" aria-labelledby="update_modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="update_modalLabel">Update Appointment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../includes/updateBooking.inc.php" method="POST">
        <input name="bookid" type="hidden" class="form-control" value="<?php echo $row['bookingId']; ?>" required>
       
        <div class = "row">        
        <div class = "col">
          <label class="form-label">Patient Name:</label>
          <input name="name" type="text" class="form-control" value="<?php echo $row['bookingName']; ?>" required>
        </div>
        <div class = "col">
          <label class="form-label">Gender:</label>
          <select name="gender" class="form-control" class="input-field box">
              <option value="" disabled>Select Gender:</option>

              <!-- TO KEEP THE DETAILS TYPED Malinao-------->        
              <option value = "Male" <?php
                if($row['bookingGender'] == 'Male'){
                    echo ' selected="selected"';
                    }?>>Male</option>

              <option value = "Female" <?php
                if($row['bookingGender'] == 'Female'){
                    echo ' selected="selected"';
                    }?>>Female</option>
        </select>
        </div>
                  </div>


        <div>
          <label class="form-label">Email:</label>
          <input name="email" type="text" class="form-control" value="<?php echo $row['bookingemail']; ?>" required>
        </div>

        <div class = "row">
        <div class = "col">
          <label class="form-label">Appointment Date:</label>
          <input name="date" type="date" id = "dateControl" class="form-control" value="<?php echo $row['bookingDate']; ?>"  required>
        </div>
        <div class = "col">
          <label class="form-label">Time:</label>
          <select name="time" class="form-control" class="input-field box">

              <option value="" disabled>Select Time:</option>

              <!-- TO KEEP THE DETAILS TYPED Malinao-------->        
              <option value = "8:00 AM" <?php
                if($row['bookingTime'] == '8:00 AM'){
                    echo ' selected="selected"';
                    }?>>8:00 AM</option>
              <option value = "8:00 AM" <?php
                if($row['bookingTime'] == '8:00 AM'){
                    echo ' selected="selected"';
                    }?>>9:00 AM</option>
              <option value = "8:00 AM" <?php
                if($row['bookingTime'] == '9:00 AM'){
                    echo ' selected="selected"';
                    }?>>9:00 AM</option>
              <option value = "10:00 AM" <?php
                if($row['bookingTime'] == '10:00 AM'){
                    echo ' selected="selected"';
                    }?>>10:00 AM</option>
              <option value = "1:00 PM" <?php
                if($row['bookingTime'] == '1:00 PM'){
                    echo ' selected="selected"';
                    }?>>1:00 PM</option>
              <option value = "2:00 PM" <?php
                if($row['bookingTime'] == '2:00 PM'){
                    echo ' selected="selected"';
                    }?>>2:00 PM</option>
              <option value = "3:00 PM" <?php
                if($row['bookingTime'] == '3:00 PM'){
                    echo ' selected="selected"';
                    }?>>3:00 PM</option>
              <option value = "4:00 PM" <?php
                if($row['bookingTime'] == '4:00 PM'){
                    echo ' selected="selected"';
                    }?>>4:00 PM</option>


              </select>
        </div>
                  </div>
        <div>
          <label class="form-label">Dental Clinic:</label>
          <select name="branch" class="form-control" class="input-field box">

                            <option value="" disabled>Select Branch:</option>

                             <!-- TO KEEP THE DETAILS TYPED Malinao-------->        
                             <option value = "Malinao" <?php
                               if($row['bookingBranch'] == 'Malinao'){
                                  echo ' selected="selected"';
                                  }?>>Malinao</option>

                              <option value = "Pinagbuhatan" <?php
                               if($row['bookingBranch'] == 'Pinagbuhatan'){
                                  echo ' selected="selected"';
                                  }?>>Pinagbuhatan</option>

                              <option value = "San Joaquin" <?php
                               if($row['bookingBranch'] == 'San Joaquin'){
                                  echo ' selected="selected"';
                                  }?>>San Joaquin</option>

                        </select>
        </div>
        <div>
          <label class="form-label">Procedure/Dental Service:</label>
          <select name="procedure" class="form-control" class="input-field box">

                            <option value="" disabled>Select Procedure:</option>

                             <!-- TO KEEP THE DETAILS TYPED Malinao-------->        
                             <option value = "Consultation" <?php
                               if($row['bookingConsultation'] == 'Consultation'){
                                  echo ' selected="selected"';
                                  }?>>Consultation</option>
                              <option value = "Oral Prophylaxis" <?php
                               if($row['bookingConsultation'] == 'Oral Prophylaxis'){
                                  echo ' selected="selected"';
                                  }?>>Oral Prophylaxis</option>
                              <option value = "Tooth Restoration" <?php
                               if($row['bookingConsultation'] == 'Tooth Restoration'){
                                  echo ' selected="selected"';
                                  }?>>Tooth Restoration</option>
                              <option value = "Tooth Extraction" <?php
                               if($row['bookingConsultation'] == 'Tooth Extraction'){
                                  echo ' selected="selected"';
                                  }?>>Tooth Extraction</option>
                              <option value = "Fluoride Application" <?php
                               if($row['bookingConsultation'] == 'Fluoride Application'){
                                  echo ' selected="selected"';
                                  }?>>Fluoride Application</option>
                              <option value = "Prosthodontic Treatment" <?php
                               if($row['bookingConsultation'] == 'Prosthodontic Treatment'){
                                  echo ' selected="selected"';
                                  }?>>Prosthodontic Treatment</option>
                               <option value = "Orthodontic Treatment" <?php
                               if($row['bookingConsultation'] == 'Orthodontic Treatment'){
                                  echo ' selected="selected"';
                                  }?>>Orthodontic Treatment</option>
                               <option value = "Periodontic Rehab" <?php
                               if($row['bookingConsultation'] == 'Periodontic Rehab'){
                                  echo ' selected="selected"';
                                  }?>>Periodontic Rehab</option>

                        </select>
        </div>
        <div>
          <label class="form-label">Status:</label>
          <select name="status" class="form-control" class="input-field box">

                            <option value="" disabled>Select Status:</option>

                             <!-- TO KEEP THE DETAILS TYPED Malinao-------->        
                             <option value = "Pending" <?php
                               if($row['bookingStatus'] == 'Pending'){
                                  echo ' selected="selected"';
                                  }?>>Pending</option>
                             <option value = "Accepted" <?php
                               if($row['bookingStatus'] == 'Accepted'){
                                  echo ' selected="selected"';
                                  }?>>Accepted</option>
                             <option value = "Declined" <?php
                               if($row['bookingStatus'] == 'Declined'){
                                  echo ' selected="selected"';
                                  }?>>Declined</option>  
                             <option value = "Done" <?php
                               if($row['bookingStatus'] == 'Done'){
                                  echo ' selected="selected"';
                                  }?>>Done</option>  
                             <option value = "Follow Up" <?php
                               if($row['bookingStatus'] == 'Follow Up'){
                                  echo ' selected="selected"';
                                  }?>>Follow Up</option>  

                        </select>
        </div>
   
        <div>
          <label class="form-label">Message:</label>
          <textarea name="message" type="text" class="form-control" 
           readonly><?php
           if($row['bookingMessage'] == NULL){
            echo "No Message";
          }
          else{
            echo $row['bookingMessage'];
          }; ?></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button  type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>


<tr>
  <!-- <th scope="row"> <?php // echo $row['bookingId'] ?> </th> -->
  <th scope="row"> <?php echo $row['bookingName'] ?> </th>
  <td> <?php echo $row['bookingGender'] ?> </td>
  <td> <?php echo $row['bookingDate'] ?> </td>
  <td> <?php echo $row['bookingTime'] ?> </td>
  <td> <?php echo $row['bookingConsultation'] ?> </td>
  <td> <?php echo $row['bookingBranch'] ?> </td>
  <td class="text-left">
  <form action="../includes/updatePendingData.php?bookingId=<?php echo htmlspecialchars($row['bookingId'])?>" method="POST">
  <!-- <form action="" method="POST"> -->
  <div class = "d-flex p-1">
  <button type="button" class="btn btn-info"  data-bs-toggle="modal" data-bs-target="#update_modal<?php echo $row['bookingId'] ?>">
     <i class="fas fa-edit"></i>
    </button>
    <label>&nbsp;</label>
    <button class="btn btn-warning" id="accept-button" name="submit">
      <i class="fas fa-check"></i>
    </button>
    <label>&nbsp;</label>
    <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?');">
      <i class="fas fa-trash"></i>
    </button>
    <div>
  </form>

  </td>
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
        <div>
          <label class="form-label">Patient Name:</label>
          <input name="name" type="text" class="form-control" value="<?php echo $row['bookingName']; ?>" required>
        </div>
        <div>
          <label class="form-label">Gender:</label>
          <input name="gender" type="text" class="form-control" value="<?php echo $row['bookingGender']; ?>"  required>
        </div>
        <div>
          <label class="form-label">Appointment Date:</label>
          <input name="date" type="text" class="form-control" value="<?php echo $row['bookingDate']; ?>"  required>
        </div>
        <div>
          <label class="form-label">Time:</label>
          <input name="time" type="text" class="form-control" value="<?php echo $row['bookingTime']; ?>" required>
        </div>
        <div>
          <label class="form-label">Dental Clinic:</label>
          <input name="branch" type="text" class="form-control" value="<?php echo $row['bookingBranch']; ?>"  required>
        </div>
        <div>
          <label class="form-label">Procedure/Dental Service:</label>
          <input name="procedure" type="text" class="form-control" value="<?php echo $row['bookingConsultation']; ?>"  required>
        </div>
        <div>
          <label class="form-label">Status:</label>
          <input name="status" type="text" class="form-control" value="<?php echo $row['bookingStatus']; ?>"  required>
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


 
<tr>
<th scope="row"> <?php echo $row['bookingName'] ?> </th>
<td> <?php echo $row['bookingGender'] ?> </td>
  <td> <?php echo $row['bookingDate'] ?> </td>
  <td> <?php echo $row['bookingTime'] ?> </td>
  <td> <?php echo $row['bookingBranch'] ?> </td>
  <td> <?php echo $row['bookingConsultation'] ?> </td>
  <td>
<form action="../includes/updateDeclinedData.php?bookingId=<?php echo htmlspecialchars($row['bookingId'])?>" method="POST">
          
<button class="btn btn-success" id="accept-button" name="submit">
<i class="fas fa-redo"></i> Recover
</button>
      </form>


      </td>
</tr>

      
<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
            <label class="form-label">Name:</label>
            <input type="text" value="<?php echo $row['bookingName']; ?>" class="form-control" READONLY>

            <label class="form-label">Date:</label>
            <input type="date" value="<?php echo $row['bookingDate']; ?>" class="form-control">

            <label class="form-label">Time:</label>
            <input type="text" value="<?php echo $row['bookingTime']; ?>" class="form-control">

            <label class="form-label">Branch:</label>
            <input type="text" value="<?php echo $row['bookingBranch']; ?>" class="form-control">

            <label class="form-label">Status:</label>
            <input type="text" value="<?php echo $row['bookingStatus']; ?>" class="form-control">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

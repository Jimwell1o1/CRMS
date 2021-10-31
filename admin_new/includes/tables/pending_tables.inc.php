
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
  <div class = "d-flex p-1">
  <button type="button" class="btn btn-info"  data-bs-toggle="modal" data-bs-target="#update_modal">
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
    <label>&nbsp;</label>
    <button class="btn btn-primary" onClick="this.disabled=true; this.value='Sending…';">
      <i class="fas fa-bell"></i>
    </button>
    <div>
  </form>

  </td>
  </td>
</tr>


 
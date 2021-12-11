<tr>
<th scope="row"> <?php echo $row['bookingName'] ?> </th>
<td> <?php echo $row['bookingGender'] ?> </td>
<td> <?php echo date('M-d-Y', strtotime($row['bookingDate'])); ?> </td>
  <td> <?php echo $row['bookingTime'] ?> </td>
  <td> <?php echo $row['bookingConsultation'] ?> </td>
  <td> <?php echo $row['bookingBranch'] ?> </td>
  <td class="text-left">
  <form action="../includes/updateDeclinedData.php?bookingId=<?php echo htmlspecialchars($row['bookingId'])?>" method="POST">
  <div  class = "d-flex p-1">
  <button class="btn btn-primary" id="accept-button" name="submit" onclick="return confirm('Do you want to recover this appointment?');">
  <i class="fas fa-redo"></i>
  </button>
  <label>&nbsp;</label>
  <button class="btn btn-success" id="accept-button" name="done" onclick="return confirm('Does the appointment finish?');">
  <i class="fas fa-check-circle"></i>
  </button>
  </div>
      </form>


      </td>
</tr>

      
<tr>
  <th scope="row"> <?php echo $row['bookingName'] ?> </th>
  <td> <?php echo $row['bookingGender'] ?> </td>
    <td> <?php echo $row['bookingDate'] ?> </td>
    <td> <?php echo $row['bookingTime'] ?> </td>
    <td> <?php echo $row['bookingBranch'] ?> </td>
    <td> <?php echo $row['bookingConsultation'] ?> </td>
    <td class="text-left">
        <form action="../includes/updateAcceptedData.php?bookingId=<?php echo htmlspecialchars($row['bookingId'])?>" method="POST">
            <!-- <button class="btn btn-outline-primary"id="accept-button" name="submit"> Update </button> -->
            <button class="btn btn-warning" id="accept-button" name="submit">
              <i class="fas fa-check"></i> Done
            </button> 
            <button class="btn btn-danger" onclick="ConfirmDelete()">
              <i class="fas fa-trash"></i>
            </button>
        </form> 
  </td>
</tr>
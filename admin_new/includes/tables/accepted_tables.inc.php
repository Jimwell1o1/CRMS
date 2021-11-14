<tr>
  <th scope="row"> <?php echo $row['bookingName'] ?> </th>
  <td> <?php echo $row['bookingGender'] ?> </td>
    <td> <?php echo $row['bookingDate'] ?> </td>
    <td> <?php echo $row['bookingTime'] ?> </td>
    <td> <?php echo $row['bookingConsultation'] ?> </td>
    <td> <?php echo $row['bookingBranch'] ?> </td>  
    <td class="text-left">
        <form action="../includes/updateAcceptedData.php?bookingId=<?php echo htmlspecialchars($row['bookingId'])?>" method="POST">
            <button class="btn btn-success" id="accept-button" name="submit">
            <i class="fas fa-check-circle"></i>
            </button> 
            <button class="btn btn-danger" name="delete" onclick="ConfirmDelete()">
            <i class="fas fa-trash-alt"></i>
            </button>
            <button class="btn btn-primary" onClick="this.disabled=true; this.value='Sending…';">
              <i class="fas fa-bell"></i>
            </button>
        </form> 
  </td>
</tr>
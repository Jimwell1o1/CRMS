
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
            
    <!-- <button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal">
      <i class="fas fa-edit"></i>
    </button> -->
    <button class="btn btn-warning" id="accept-button" name="submit">
    <i class="fas fa-user-check"></i> Accept
    </button>
    <button class="btn btn-danger" onclick="ConfirmDelete()">
    <i class="fas fa-trash-alt"></i> 
    </button>
  </form>
  </td>
</tr>
                                            
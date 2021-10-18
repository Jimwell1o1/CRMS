<tr>
<th scope="row"> <?php echo $row['bookingName'] ?> </th>
<td> <?php echo $row['bookingGender'] ?> </td>
  <td> <?php echo $row['bookingDate'] ?> </td>
  <td> <?php echo $row['bookingTime'] ?> </td>
  <td> <?php echo $row['bookingBranch'] ?> </td>
  <td> <?php echo $row['bookingConsultation'] ?> </td>
  <td>
<form action="../includes/updatePendingData.php?bookingId=<?php echo htmlspecialchars($row['bookingId'])?>" method="POST">
          
<button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal">
    <i class="fas fa-edit"></i>
  </button>
      </form>


</td>
</tr>
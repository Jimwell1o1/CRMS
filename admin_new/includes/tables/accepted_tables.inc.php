<tr>
  <th scope="row"> <?php echo $row['bookingName'] ?> </th>
  <td> <?php echo $row['bookingGender'] ?> </td>
    <td> <?php echo $row['bookingDate'] ?> </td>
    <td> <?php echo $row['bookingTime'] ?> </td>
    <td> <?php echo $row['bookingConsultation'] ?> </td>
    <td> <?php echo $row['bookingBranch'] ?> </td>  
    <td class="text-left">
        <form action="../includes/updateAcceptedData.php?bookingId=<?php echo htmlspecialchars($row['bookingId'])?>" method="POST">
        <div class = "d-flex p-1">
        <button class="btn btn-success" id="accept-button" name="submit">
            <i class="fas fa-check-circle"></i>
            </button> 
            <label>&nbsp;</label>
            <button class="btn btn-danger" name="delete" onclick="ConfirmDelete()">
            <i class="fas fa-trash-alt"></i>

            </button>
            <label>&nbsp;</label>
        </form> 
        <form action="includes/email-confirmbooking.inc.php" method="POST">
        <input type="hidden" name="username" value="<?php echo htmlspecialchars($row['bookingName'])?>" >
        <input type="hidden" name="useremail" value="<?php echo htmlspecialchars($row['bookingemail'])?>" >
        <input type="hidden" name="usertime" value="<?php echo htmlspecialchars($row['bookingTime'])?>" >
        <input type="hidden" name="userdate" value="<?php echo htmlspecialchars($row['bookingDate'])?>" >
            <button type="submit" class="btn btn-primary">
                  <i class="fas fa-bell"></i>
                </button>
                </div>
          </form>
  </td>
</tr>
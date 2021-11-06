<tr>
<th scope="row"> <?php echo $row['bookingName'] ?> </th>
<td> <?php echo $row['bookingGender'] ?> </td>
  <td> <?php echo $row['bookingDate'] ?> </td>
  <td> <?php echo $row['bookingTime'] ?> </td>
  <td> <?php echo $row['bookingBranch'] ?> </td>
  <td> <?php echo $row['bookingConsultation'] ?> </td>
  <td>
<form action="../includes/updateDeclinedData.php?bookingId=<?php echo htmlspecialchars($row['bookingId'])?>" method="POST">
          
<?php echo '<b>Missed</b>'; ?>
      </form>


      </td>
</tr>

      



<?php
$conn = mysqli_connect("localhost","root","","phpproject01");

$query = "SELECT COUNT(*) as bookingCount FROM booking WHERE bookingStatus = 'Pending'";

$query_result = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($query_result)){

  $pending = $row['bookingCount'];
}


$query = "SELECT COUNT(*) as bookingCount FROM booking WHERE bookingStatus = 'Accepted'";

$query_result = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($query_result)){

  $accepted = $row['bookingCount'];
}

$query = "SELECT COUNT(*) as bookingCount FROM booking WHERE bookingStatus = 'Declined'";

$query_result = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($query_result)){

  $decline = $row['bookingCount'];
}

$query = "SELECT COUNT(*) as bookingCount FROM booking WHERE bookingStatus = 'Done'";

$query_result = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($query_result)){

  $history = $row['bookingCount'];
}
$query = "SELECT COUNT(*) as userCount FROM users";

$query_result = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($query_result)){

  $usercount = $row['userCount'];
}





?>
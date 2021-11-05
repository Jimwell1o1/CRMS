<?php
$conn = mysqli_connect("localhost","root","","phpproject01");
$sessionbranch = $_SESSION['admin_branchName'];
$query = "SELECT COUNT(*) as bookingCount FROM booking WHERE bookingStatus = 'Pending' AND bookingBranch = '".$sessionbranch."'";

$query_result = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($query_result)){

  $pending = $row['bookingCount'];
}


$query = "SELECT COUNT(*) as bookingCount FROM booking WHERE bookingStatus = 'Accepted' AND bookingBranch = '".$sessionbranch."'";

$query_result = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($query_result)){

  $accepted = $row['bookingCount'];
}

$query = "SELECT COUNT(*) as bookingCount FROM booking WHERE bookingStatus = 'Declined' AND bookingBranch = '".$sessionbranch."'";

$query_result = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($query_result)){

  $decline = $row['bookingCount'];
}

$query = "SELECT COUNT(*) as bookingCount FROM booking WHERE bookingStatus = 'Done' AND bookingBranch = '".$sessionbranch."'";

$query_result = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($query_result)){

  $done = $row['bookingCount'];
}



$query = "SELECT COUNT(*) as userCount FROM users";

$query_result = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($query_result)){

  $usercount = $row['userCount'];
}

$query = "SELECT bookingDate  FROM booking";
$query_result = mysqli_query($conn,$query);
 while($row = mysqli_fetch_assoc($query_result)){
  $year = date('Y');
}

$query = "SELECT COUNT(*) as bookCount FROM booking" ;
$query_result = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($query_result)){

  $bookCount = $row['bookCount'];
  

  

  }



//   $query = "SELECT MONTH('bookingDate') as month FROM booking WHERE `bookingId` = 1";
//   $query_result = mysqli_query($conn,$query);
//  while($row = mysqli_fetch_assoc($query_result)){

//   $month = $row['month'];
 
// }
  








?>
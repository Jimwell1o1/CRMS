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

//customer history counting
$query = "SELECT COUNT(*) as bookingCount FROM booking WHERE bookingBranch = '".$sessionbranch."'" ;

$query_result = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($query_result)){

  $history = $row['bookingCount'];
}

//user counting
$query = "SELECT COUNT(*) as userCount FROM users";
$query_result = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($query_result)){

  $usercount = $row['userCount'];
}


//year set up on chart
$query = "SELECT bookingDate  FROM booking";
$query_result = mysqli_query($conn,$query);
 while($row = mysqli_fetch_assoc($query_result)){
  $year = date('Y');
}





//on process pa 
$query = "SELECT COUNT(*) as bookCount FROM booking" ;
$query_result = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($query_result)){
  $bookCount = $row['bookCount'];
  }


//on process pa 
  $query = "SELECT MONTH('2021/03/23') as month FROM booking";
  $query_result = mysqli_query($conn,$query);
 while($row = mysqli_fetch_assoc($query_result)){

  $month = $row['month'];
 
 }
  








?>
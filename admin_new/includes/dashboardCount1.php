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

    //set timezone
    //date_default_timezone_set('Asia/Manila');
    $year = date('Y');
    $total=array();
    for ($month = 1; $month <= 12; $month ++){
     
        $query="SELECT *, COUNT(*) as bookCount from booking where month(bookingDate)='$month' AND bookingBranch = '".$sessionbranch."'";
        $query_result = mysqli_query($conn,$query);
        while($row = mysqli_fetch_assoc($query_result)){
 
        $total[]=$row['bookCount'];
      }
    }
 
    $tjan = $total[0];
    $tfeb = $total[1];
    $tmar = $total[2];
    $tapr = $total[3];
    $tmay = $total[4];
    $tjun = $total[5];
    $tjul = $total[6];
    $taug = $total[7];
    $tsep = $total[8];
    $toct = $total[9];
    $tnov = $total[10];
    $tdec = $total[11];

    




?>
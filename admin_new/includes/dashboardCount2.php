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

$query = "SELECT COUNT(*) as bookingCount FROM booking";

$query_result = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($query_result)){

  $history = $row['bookingCount'];
}


$query = "SELECT COUNT(*) as userCount FROM users";

$query_result = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($query_result)){

  $usercount = $row['userCount'];
}



    //set timezone
    //date_default_timezone_set('Asia/Manila');
    $year = date('Y');
    $total=array();
    for ($month = 1; $month <= 12; $month ++){
     
        $query="SELECT *, COUNT(*) as bookCount from booking where month(bookingDate)='$month'";
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

    
    $query = "SELECT bookingDate FROM booking";

    $query_result = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($query_result)){
    
      $booking = date('d M Y', strtotime($row['bookingDate']));
    }

?>
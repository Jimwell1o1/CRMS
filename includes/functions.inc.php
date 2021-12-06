<?php
   


// Function for Sign Up of User Account
function invalidEmail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }else {
        $result = false;
    }
    return $result;
};

function invalidUid($uid){
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $uid)){
        $result = true;
    }else {
        $result = false;
    }
    return $result;
};

function pwdMatch($password, $confirmpassword){
    $result;
    if($password !== $confirmpassword){
        $result = true;
    }else {
        $result = false;
    }
    return $result;
};


//This function is duplicated take note.
function uidExist($conn, $username, $email){
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        # code...
        header("Location: ../reset-password.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss",  $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        # code...
        return $row;

    } else {
        
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}


function uidExists($conn, $uid){
    $sql = "SELECT * FROM users WHERE usersUid = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $uid);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
};

function emailExists($conn, $email){
    $sql = "SELECT * FROM users WHERE usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
};




// Function for Create User Account inserting to Database
function createUser($conn, $name, $age, $address, $gender, $birthday, $email, $uid, $password){
    $sql = "INSERT INTO users (usersName, usersAge, usersAddress, usersGender, usersBirthday, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssssssss", $name, $age, $address, $gender, $birthday, $email, $uid, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
};


// Function for Sign Up of Admin Account
function admin_uidExists($conn, $admin_uid){
    $sql = "SELECT * FROM adminAcc WHERE adminAccUid = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $admin_uid);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
};

function admin_emailExists($conn, $admin_email){
    $sql = "SELECT * FROM adminAcc WHERE adminAccEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $admin_email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
};





// Function for Create Admin Account inserting to Database
function createAdminUser($conn, $admin_name, $admin_email, $admin_uid,$admin_branchName, $admin_password){
    $sql = "INSERT INTO adminAcc (adminAccName, adminAccEmail, adminAccUid, adminAccBranch,adminAccPwd) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../admin/signup-admin.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($admin_password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssss", $admin_name, $admin_email, $admin_uid,$admin_branchName, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../admin/signup-admin.php?error=none");
    exit();
};




// Function for Login for Admin Account
function loginAdmin($conn, $uid, $password){
    $admin_uidExists = admin_uidExists($conn, $uid);

    if($admin_uidExists === false){
        header("location: ../admin/login-admin.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $admin_uidExists["adminAccPwd"];
    $checkPwd = password_verify($password, $pwdHashed);
    
    if($checkPwd === false){
        header("location: ../admin/login-admin.php?error=incorrectpwd");
        exit();
    }else if ($checkPwd === true){
        $_SESSION["admin_userName"] = $admin_uidExists["adminAccName"];
        $_SESSION["admin_branchName"] = $admin_uidExists["adminAccBranch"];
        
        header("location: ../admin_new/index.php");
        exit();
    }

};






// Function for Update User Account Profile inserting to Database
function usersInformation($conn, $name, $email, $uid, $password, $address, $gender, $birthday){
    $sql = "INSERT INTO usersInformation  (usersInformationName, usersInformationEmail, usersInformationUid, usersInformationPwd, usersInformationAddress, usersInformationGender, usersInformationBirthday) VALUES (?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../myAccount.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssssss", $name, $email, $uid, $hashedPwd, $address, $gender, $birthday);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../myAccount.php?error=none");
    exit();
};




// Function for Booking inserting to Database
function bookingDetails($conn, $username, $name, $email, $gender, $date, $time, $consultation, $branch, $message, $status){
    $sql = "INSERT INTO booking (bookingUsername, bookingName, bookingemail, bookingGender, bookingDate, bookingTime, bookingConsultation, bookingBranch, bookingMessage, bookingStatus) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../forms/appointment/index.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssssssssss", $username, $name, $email, $gender, $date, $time, $consultation, $branch, $message, $status);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    $_SESSION["doneBooking"] = "doneBooking";

    header("location: ../user/history.php?error=donebooking");
    exit();
};



// Function for Admin Inserting booking
function bookingDetails_admin($conn, $username, $name, $email, $gender, $date, $time, $consultation, $branch, $message, $status){
    $sql = "INSERT INTO booking (bookingUsername, bookingName, bookingemail, bookingGender, bookingDate, bookingTime, bookingConsultation, bookingBranch, bookingMessage, bookingStatus) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: bookingDetails_admin.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssssssssss", $username, $name, $email, $gender, $date, $time, $consultation, $branch, $message, $status);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    $_SESSION["doneBooking"] = "doneBooking";

    header("location: ../admin_new/index.php?donebooking");
    exit();
};

// Function for Booking inserting to Database
function bookingUpdate($conn, $id, $name, $gender, $email, $date, $time, $consultation, $branch, $status,$message){
    $sql = "UPDATE booking SET bookingName = '$name', bookingGender = '$gender', bookingemail = '$email', bookingDate = '$date', bookingTime = '$time', bookingConsultation = '$consultation', bookingBranch = '$branch',  bookingStatus = '$status',  bookingMessage = '$message' WHERE bookingId = '$id';";
    $query_run = mysqli_query($conn, $sql);
    
    if($query_run){
        header("location: ../admin_new/accepted_tables.php?error=successful");
                exit();
            }else {
                header("location: ../admin_new/accepted_tables.php?error=unsuccessful");
                exit();
            }
};
?>
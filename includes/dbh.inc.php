<?php

    $serverName = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "phpproject01";

    $conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);
    $mysqli = new mysqli($serverName, $dbUsername, $dbPassword, $dbName);

    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

    // create Database
    $mysql = "CREATE DATABASE IF NOT EXISTS $dbName";

    if(mysqli_query($conn, $mysql)){
        $conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

        $sql = '
        CREATE TABLE IF NOT EXISTS users(
            usersId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
            usersName varchar(128) NOT NULL,
            usersEmail varchar(128) NOT NULL,
            usersUid varchar(128) NOT NULL,
            usersPwd varchar(128) NOT NULL
         
         );       
        ';

        $sql .= '
        CREATE TABLE IF NOT EXISTS adminAcc (
            adminAcc int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
            adminAccName varchar(128) NOT NULL,
            adminAccBranch varchar(128) NOT NULL,
            adminAccEmail varchar(128) NOT NULL,
            adminAccUid varchar(128) NOT NULL,
            adminAccPwd varchar(128) NOT NULL
        );      
        ';

        $sql .= '
        CREATE TABLE IF NOT EXISTS booking (
            bookingId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
            bookingUsername varchar(128) NOT NULL,
            bookingName varchar(128) NOT NULL,
            bookingGender varchar(128) NOT NULL,
            bookingDate varchar(128) NOT NULL,
            bookingTime varchar(128) NOT NULL,
            bookingConsultation varchar(128) NOT NULL,
            bookingBranch varchar(128) NOT NULL,
            bookingMessage varchar(300) NOT NULL,
            bookingStatus varchar(128) NOT NULL
        )AUTO_INCREMENT=18000;       
        ';

        $sql .= '
        CREATE TABLE IF NOT EXISTS `password_reset_temp` (
            `email` varchar(250) NOT NULL,
            `key` varchar(250) NOT NULL,
            `expDate` datetime NOT NULL
          ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
        ';

        $sql .= '
        CREATE TABLE IF NOT EXISTS emails (
            emailId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
            emailReceiver varchar(128) NOT NULL,
            emailSubject varchar(128) NOT NULL,
            emailBody varchar(1000) NOT NULL,
            emailDate varchar(128) NOT NULL,
            emailTime varchar(128) NOT NULL
        );
        ';

        $sql .= '
        
        CREATE TABLE IF NOT EXISTS `events` (
            `id` int(11) NOT NULL,
            `title` varchar(255) NOT NULL,
            `start_event` datetime NOT NULL,
            `end_event` datetime NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

        ALTER TABLE `events`
        ADD PRIMARY KEY (`id`);

        ALTER TABLE `events`
        MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
        ';

        
        $result = mysqli_multi_query($mysqli, $sql);

        
if ($result) {
    do {
        // grab the result of the next query
        if (($result = mysqli_store_result($mysqli)) === false && mysqli_error($mysqli) != '') {
            echo "Query failed: " . mysqli_error($mysqli);
        }
    } while (mysqli_more_results($mysqli) && mysqli_next_result($mysqli)); // while there are more results
} else {
    echo "First query failed..." . mysqli_error($mysqli);
}
        
    }else{
        echo ("Error on creating database ". mysqli_error($conn));
    }
?>
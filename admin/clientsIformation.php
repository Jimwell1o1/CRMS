<?php
    session_start();

    require_once '../includes/dbh.inc.php';

    if(isset($_GET['usersName']))
        $usersName = $_GET['usersName'];
    
?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/clientInformation.css">
    <title> Client Information </title>
</head>
    <body>
        <!-- Client Information container  -->
        <div class="client-container">
            <div class="welcome">
                <a href="profile-admin.php"> <img src="../images/logo.png" title="Home"> </a>
            </div>
            <div class="client-content">
                <h1> Client Information </h1>
                <div class="client-booking">
                    <?php
                        $sql = "SELECT * FROM users;";
                        $result = mysqli_query($conn, $sql);
                        $resultChecked = mysqli_num_rows($result);

                        if($resultChecked > 0){  
                            while($row = mysqli_fetch_assoc($result)){ 
                                if($row['usersName'] === $usersName){ ?>
                                <table>
                                    <tr>
                                        <td> Name </td>
                                        <td> Age </td>
                                        <td> Address </td>
                                        <td> Gender </td>
                                        <td> Birthday </td>
                                        <td> Email </td>
                                    </tr>
                                    <tr>
                                        <td> <?php echo $row['usersName'] ?> </td>
                                        <td> <?php echo $row['usersAge'] ?> </td>
                                        <td> <?php echo $row['usersAddress'] ?> </td>
                                        <td> <?php echo $row['usersGender'] ?> </td>
                                        <td> <?php echo $row['usersBirthday'] ?> </td>
                                        <td> <?php echo $row['usersEmail'] ?> </td>
                                    </tr>
                                </table>
                        <?php } } } ?>
                    </div>
                </div>
                <div class="back-button">
                    <a href="profile-admin.php"> Back </a>
                </div>
            </div>
    </body>
</html>
<?php
    session_start();
    require_once '../includes/emptySession.php';

    emptyAdminLoginSession();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/loginANDsignup.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="../sweetalert/jquery-3.5.1.min.js"></script>
    <script src="../sweetalert/sweetalert2.all.min.js"></script>
    <title> Starbite Admin | Register </title>
</head>
    <body class="admin">
        <div class="container">
            <h1> Administrator </h1>
            <form class="form" action="../includes/signup-admin.inc.php" method="POST">
                <h2> Sign Up </h2>
                <div class="input-box">
                    <input class="text-input" type="text" name="admin_name" required
                        value="<?php 
                                    if(isset($_SESSION['admin_name'])){
                                        echo htmlspecialchars($_SESSION['admin_name']);
                                    }
                                ?>">
                    <label class="text-label"> Full Name </label>
                </div>
                <div class="input-box">
                    <input class="text-input" type="text" name="admin_email" required
                        value="<?php 
                                    if(isset($_SESSION['admin_email'])){
                                        echo htmlspecialchars($_SESSION['admin_email']);
                                    }
                                ?>">
                    <label class="text-label"> Email </label>
                </div>
                <div class="input-box">
                    <input class="text-input" type="text" name="admin_uid" required
                        value="<?php 
                                    if(isset($_SESSION['admin_uid'])){
                                        echo htmlspecialchars($_SESSION['admin_uid']);
                                    }
                                ?>">
                    <label class="text-label"> Username </label>
                </div>
                <div class="input-box">
                    <input id="password1" class="text-input" type="password" name="admin_password" required
                        value="<?php 
                                    if(isset($_SESSION['admin_password'])){
                                        echo htmlspecialchars($_SESSION['admin_password']);
                                    }
                                ?>">
                    <label class="text-label"> Password </label>
                    <span id="show-password" class="far fa-eye-slash"></span>
                    <span id="hide-password" class="far fa-eye" style="display:none"></span>
                </div>
                <div class="input-box">
                    <input id="password2" class="text-input" type="password" name="admin_confirmpassword" required
                        value="<?php 
                                    if(isset($_SESSION['admin_confirmpassword'])){
                                        echo htmlspecialchars($_SESSION['admin_confirmpassword']);
                                    }
                                ?>">
                    <label class="text-label"> Confirm Password </label>
                    <span id="show-confirm-password" class="far fa-eye-slash"></span>
                    <span id="hide-confirm-password" class="far fa-eye" style="display:none"></span>
                </div>
                <input class="submit-button" type="submit" name="submit" value="Sign Up" required>
                <span> Already have an account? <a href="login-admin.php"> Login here </a> </span> 
            </form>
        </div>
    </body>

    
    <!-- For Checking -->
    <?php
        if(isset($_GET["error"])){
            if($_GET["error"] === "invalidemail"){ ?>
                <script>
                    Swal.fire({
                        icon: 'error',
                        width: '350',
                        title: 'Invalid email!',
                        text: ''
                    })
                </script>
            <?php }

            if($_GET["error"] === "emailtaken"){ ?>
                <script>
                    Swal.fire({
                        icon: 'warning',
                        width: '350',
                        title: 'Email is already taken!',
                        text: ''
                    })
                </script>
            <?php }

            if($_GET["error"] === "usernametaken"){ ?>
                <script>
                    Swal.fire({
                        icon: 'warning',
                        width: '350',
                        title: 'Username is already taken!',
                        text: ''
                    })
                </script>
            <?php }

            if($_GET["error"] === "invaliduid"){ ?>
                <script>
                    Swal.fire({
                        icon: 'error',
                        width: '350',
                        title: 'Invalid Username!',
                        text: ''
                    })
                </script>
            <?php }
            
            if($_GET["error"] === "passwordsdontmatch"){ ?>
                <script>
                    Swal.fire({
                        icon: 'error',
                        width: '350',
                        title: "Password doesn't match!",
                        text: ''
                    })
                </script>
            <?php }
            
            if($_GET["error"] === "stmtfailed"){ ?>
                <script>
                    Swal.fire({
                        icon: 'error',
                        width: '350',
                        title: 'Something went wrong!',
                        text: ''
                    })
                </script>
            <?php }

            if($_GET["error"] === "none"){ ?>
                <script>
                    Swal.fire({
                        icon: 'success',
                        width: '350',
                        title: 'Account successfully created!',
                        text: ''
                    })
                </script>
                
            <?php }

                $_SESSION['name'] = "";
                $_SESSION['email'] = "";
                $_SESSION['uid'] = "";
                $_SESSION['password'] = "";
                $_SESSION['confirmpassword'] = "";
        }
    ?>


    <!-- Show and Hide password -->
    <script>
        const showPassword = document.getElementById("show-password");
        const hidePassword = document.getElementById("hide-password");
        const showConfirmPassword = document.getElementById("show-confirm-password");
        const hideConfirmPassword = document.getElementById("hide-confirm-password");
        const password1 = document.getElementById("password1");
        const password2 = document.getElementById("password2");

        showPassword.addEventListener("click", function(){
            if(password1.type === "password"){
                password1.setAttribute("type", "text");
                showPassword.style.display = "none";
                hidePassword.style.display = "block";
            }
        });

        hidePassword.addEventListener("click", function(){
            if(password1.type === "text"){
                password1.setAttribute("type", "password");
                hidePassword.style.display = "none";
                showPassword.style.display = "block";
            }
        });

        showConfirmPassword.addEventListener("click", function(){
            if(password2.type === "password"){
                password2.setAttribute("type", "text");
                showConfirmPassword.style.display = "none";
                hideConfirmPassword.style.display = "block";
            }
        });

        hideConfirmPassword.addEventListener("click", function(){
            if(password2.type === "text"){
                password2.setAttribute("type", "password");
                hideConfirmPassword.style.display = "none";
                showConfirmPassword.style.display = "block";
            }
        });
    </script>
</html> 
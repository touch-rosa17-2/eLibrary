<?php
    require './config.php';

    $tblUser = "tbl_user";
    $tblStu  = "tbl_student"; 
    
    if(isset($_POST["btnLogin"])){
        $nameEmail = $_POST["email_or_username"];
        $password  = $_POST["password"]; 
        $sql = "SELECT * FROM $tblStu, $tblUser WHERE $tblStu.stuEmail = '$nameEmail' OR $tblStu.stuUsername = '$nameEmail' 
                                                    OR $tblUser.username = '$nameEmail' OR $tblUser.userEmail = '$nameEmail' ";
        $query = mysqli_query($connect, $sql);
        $row       = mysqli_fetch_assoc($query);
        if(mysqli_num_rows($query)>0){
            if($password == $row["stuPass"] || $password == $row["password"]){
                $_SESSION["login"] = true;
                $_SESSION["id"]    = $row["stuID"];
                echo
                "<script> alert('Successfully loggin...'); </script>";
                header("refresh: 0.1, url=../admin/index.php");
            }
            else{
                echo
                "<script> alert('Wrong Password...');</script>";
            }
        }else{
            echo
            "<script> alert('User not registered...');</script>";
            // header("refresh:0.1, url=registration.php");
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font-awesome -->
    <link rel="stylesheet" href="../../node_modules/font-awesome/css/font-awesome.min.css">
    <!-- tailwind -->
    <link rel="stylesheet" href="../../dist/output.css">
    <!-- css -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Form</title>
</head>
<body>
    <div class="container">
        <!-- login form -->
        <div class="login-box log">
            <h2>Login</h2>
            <form action="./login.php" method="POST">
                <div class="user-box">
                    <input type="text" name="email_or_username" required>
                    <label>Email or Username</label>
                </div>
                <div class="user-box">
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
                <a href="#" class="forgot-password-link">Forgot Password?</a>
                <input type="submit" value="Login" name="btnLogin" class="login-btn">
                <a href="./registration.php" class="register-link">Register</a>
            </form>
        </div>
    </div>
    

</body>
</html>
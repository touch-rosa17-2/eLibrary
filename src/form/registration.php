<?php
    require './config.php';
    $table = "tbl_student";
    $tblUser = "tbl_user";
    
    
    if(isset($_POST["btnRegistration"])){
        $errors = array();
        
        
        $name = $_POST["fullName"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirmPassword"];
        // duplicate
        $duplicateUsername = mysqli_query($connect, "SELECT * FROM $table, $tblUser WHERE $table.stuUsername = '$username' OR $tblUser.username = '$username'"); 
        $duplicateEmail    = mysqli_query($connect, "SELECT * FROM $table, $tblUser WHERE $table.stuEmail = '$email' OR $tblUser.userEmail = '$email'"); 

        if(mysqli_num_rows($duplicateUsername) > 0){
            $errors['u'] = 'Username Exists';
        }if(mysqli_num_rows($duplicateEmail) > 0){
            $errors['e'] = 'Email Exits';
        }
        elseif(count($errors)==0)
        {

            if($password == $confirmPassword){
                $sql = "INSERT INTO $table(stuUsername, stuEmail, stuPass, stuDisplayName) VALUES('$username', '$email', '$password', '$name')";
                $query = mysqli_query($connect, $sql);
                if($query>0){
                    echo 
                    "<script> alert('Register successfull...'); </script>";
                    header("refresh:1, url=./registration.php");
                }else{
                    echo
                    "<script> alert('Something wrong...');</script>";
                }
            }else{
                $errors['p'] = 'Password does not match.';
            }
        }
        mysqli_close($connect);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/registration.css">
    <!-- font  -->
    <link rel="stylesheet" href="../../node_modules/font-awesome/css/font-awesome.min.css">
    <title>Registration</title>
</head>
<body>
    <img class="bg-img" src="./assets/img/animeLibraBg.jpg" alt="">
    <div class="register-box regi">
        <h2>Register</h2>
        <form class="form" action="./registration.php" method="POST" >
            <!-- <div class="profile">
                <input type="file" name="profileImage" id="profileImage" >
                <img  class="userIcon" src="./assets/img/user.png" alt="">
            </div> -->
            <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="text" name="fullName" id="fullName" placeholder="Full Name" required 
                    value="<?php if(isset($_POST['btnRegistration'])){ echo $_POST['fullName']; } ?>"
                >
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Electronic Mail" required class="<?php if(isset($errors['e'])){ echo 'duplicateValue'; }?>"
                    value="<?php if(isset($_POST['btnRegistration'])){ echo $_POST['email']; } ?>"
                >
                <p><?php if(isset($errors['e'])){ echo $errors['e']; }  ?></p>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Username" required class="<?php if(isset($errors['u'])){ echo 'duplicateValue'; }?>"
                    value="<?php if(isset($_POST['btnRegistration'])){ echo $_POST['username']; } ?>"
                >
                <p><?php if(isset($errors['u'])){ echo $errors['u']; }  ?></p>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password"  required class="<?php if(isset($errors['p'])){ echo 'duplicateValue'; }  ?>"
                    value="">
                <p><?php if(isset($errors['p'])){ echo $errors['p']; }  ?></p>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" name="confirmPassword" id="confirmPassword" placeholder="confirmPassword" required  class="<?php if(isset($errors['p'])){ echo 'duplicateValue'; }  ?>"
                    value="">
            </div>
            <p class="alreadyHave">Already have account? <a href="./login.php">Login</a></p>
            
            <input type="submit" name="btnRegistration">
        </form>

    </div>
    
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-color: 	rgb(211,211,211);
        }
        .w-100{
            width: 100%;
        }
        .container-user{
            position: relative;
            left: 250px;
            /* margin-left: 280px; */
            width: calc(100% - 280px);
            padding: 20px;
        }
        .form-user{
            margin-top: 20px;
            background-color:rgb(240,240,240);
            display: flex;
            justify-content: center;
            /* align-items: center; */
            flex-direction: column;
        }
        .form-title{
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgb(48,48,48);
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
        }
        .form-title h3{
            color: rgb(200,200,200);
        }
        .btnClose{
            cursor: pointer;
            background-color: white;
            width: 15px;
            height: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            color: rgb(48,48,48);
            transition: all 0.3s ease-in-out;
        }
        .btnClose:hover{
            background:red;
            color:white;
        }
        .form-user form{
            padding: 20px;
            display: flex;
            justify-content:space-between;
            flex-direction: row;
        }
        .imgUpload{
            width:350px;
            height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .imgUpload img{
            width: 100%;
            height: 100%;
            object-fit:contain;
            border: 1px solid gray;
            background-position: center;
        }
        .imgUpload input{
            width: 100%;
            /* height: 30px; */
            margin-top: 10px;
            font-size: 13px;
            padding: 2px;
            border: 1px solid gray;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .info{
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
            flex-wrap: wrap;
            width: 90%;
            height: 220px;
            padding: 0 5px;
        }
        .form-group{
            display: flex;
            justify-content: flex-start;
            align-items: center;
            flex-direction: row;
            /* flex-wrap: wrap; */
            width: 100%;
            position: relative;
            border: 1px solid rgb(200,200,200);
            /* padding: 10px; */
            margin:5px 5px ;
            overflow: hiddens;
            box-sizing: inherit;
        }
        .form-group label{
            width: auto;
            height: auto;
            /* margin: 10px 0; */
            padding: 15px;
            background-color: rgb(211,211,211);
            border: 1px solid rgb(211,211,211);

        }
        .form-group input{
            padding: 10px;
            width: 100%;
            border: 1px solid white;
            transition: all 0.3s ease-in-out;
        }
        /* .form-group input[type="text"]{
            width:40%;
        }
        .form-group input[type="email"]{
            width: 100%;
        }
        .form-group input[type="password"]{
            width: 35%;
        } */
        .form-group input[type="radio"]{
            width:20px;
            height: auto;
            height: auto;
            cursor: pointer;
            background: rgb(211,211,211);
        }
        .form-group input:focus{
            outline: none !important;
            border:1px solid yellowgreen;
            box-shadow: 0 0 10px #719ECE;
        }
        .bgGray{
            background-color: rgb(211,211,211);
        }
        .bgRole{
            background:rgb(211,211,211);
            width: 60%;
            margin: 0;
            padding: 0;
        }
    </style>
    <title>Document</title>
</head>
<body>
<?php
    include './sideMenu.php';

?>    
    <div class="container-user">
        <div class="title-user">
            <h1>User Management</h1>
        </div>
        <div class="form-user">
            <div class="form-title">
                <h3>Add/Update User Detail</h3>
                <div class="btnClose">
                    <i class="fa fa-close"></i> 
                </div>
            </div>
            <form action="./mngUser.php" method="post">
                <div class="imgUpload">
                    <img src="./assets/img/profile/programmer.png" alt="" srcset="">
                    <input type="file" name="profileImg" id="">
                </div>
                <div class="info">
                    <div class="form-group">
                        <label for="fullName">Full Name</label>
                        <input type="text" name="fullName" class="w-100">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username">
                    </div>
                    <div class="form-group w-100">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="w-100">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="confirmPassword">Confirm Password</label>
                        <input type="password" name="confirmPassword">
                    </div>
                    <div class="form-group bgRole">
                        <label for="role">Attach Role</label>
                        <input type="radio" name="role" id="student" class="bgGray">
                        <label for="student">Student</label>
                        <input type="radio" name="role" id="teacher" class="bgGray">
                        <label for="teacher">Teacher</label>
                        <input type="radio" name="role" id="librarian" class="bgGray">
                        <label for="librarian">Librarian</label>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    
</body>
</html>









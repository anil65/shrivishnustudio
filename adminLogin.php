
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
    
    <style>
         .background
         {
             background-image:url('login.jpg');
             background-repeat:no-repeat;
             background-size:cover;
        }
        .wrapper
        {
            width:600px;
            height:400px;
            background:white;
            margin:150px 0px 0px 200px;
            padding:50px 50px 0px 20px;
            box-shadow:2px 2px 2px whitesmoke;
        }
        .admin-login-border
        {
            border-bottom:5px solid blue;
            font-size:25px;
        }
        h1
        {
            color:green;
            font-size:25px;
            text-align:center;
        }
        h2
        {
            color:red;
            font-size:25px;
            text-align:center;
        }
    </style>
    <title>Admin Login</title>
</head>
<body class="background">
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-4">
                    <h1 class="admin-login-border">
                        Admin Login
                    </h1>
                    </div>
            </div>
            <br>
            <form action="adminLogin.php" method="post">
                <div class="row">
                    <div class="col-2"></div>

                    <div class="col-8">
                        <input class="form-control" type="text" name="asit_admin_username" placeholder="Username">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <input class="form-control" type="password" name="asit_admin_password" placeholder="Password">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-3">
                        <input class="form-control" type="submit" name="submit" value="Submit">
                    </div>
                </div> 
            </form>
        </div>
    </div>
</body>
</html>

<?php
    include('connection.php');
    error_reporting();
    if(isset($_POST['submit']))
    {
        $username = $_POST['asit_admin_username'];
        $password = $_POST['asit_admin_password'];
        $sql = "SELECT * FROM admin where username ='$username' AND password='$password'";
        $result = mysqli_query($con,$sql);
        if(mysqli_num_rows($result) == 1)
        {
            ?>
                <script>
                    swal("Congrates !", "You have been login Successfully!", "success");
                </script>
            <?php
            header("refresh:2;dashboard.php");
        }
        else 
        {
            ?>
            <script>
                swal("Sorry!", "Username or password is Wrong!", "warning");
            </script>
            <?php
            header("refresh:2;adminLogin.php");
        }
    }
?>
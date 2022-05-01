<?php
    include("connection.php");
    error_reporting();
    if($_POST['send'])
    {
        $usr = $_POST['username'];
        $uemail = $_POST['useremail'];
        $usrphone = $_POST['phonenumber'];
        $comment = $_POST['message'];
        $sql = "INSERT INTO contact VALUES(DEFAULT,'$usr','$uemail','$usrphone','$comment')";
        $result = mysqli_query($con,$sql);
        if($result)
        {
            echo 'Data inserted Succesfully ...';
        }
        else
        {
            echo'Data insertion failed ...';
        }
    }

?>
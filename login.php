
<?php
require 'connection.php';
session_start();

if (isset($_POST['submit'])){

    if (isset($_POST['token'])){
        $token = $_POST['token'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
    }
    $sql = "select * from student where email ='$email' and pass ='$pass'";
    $result = $conn->query($sql);
//    print_r($sql);
//    echo $result;
    $row = mysqli_fetch_array($result);

    $count = mysqli_num_rows($result);
    if($count>0){
        echo "user found";
//        $_SESSION['']
    }
    else{
        echo "user not found";
    }
}
?>
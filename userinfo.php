<?php
    $connect = mysqli_connect('localhost','root');

    if($connect){
        echo "Connection Successful";
    }
    else{
        echo "No Connection";
    }
    mysqli_select_db($connect,'project_work01');
    $user = $_POST['user_name'];
    $email = $_POST['user_email'];
    $phone = $_POST['user_mobile'];
    $comment = $_POST['comment'];

    $query = " INSERT INTO user_info(user_name, user_email, user_phone, comment) 
    VALUES ('$user','$email','$phone','$comment')";

    mysqli_query($connect,$query);
    header('location:index.html');

?>
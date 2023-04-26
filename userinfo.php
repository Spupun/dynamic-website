<?php

$conn = mysqli_connect('localhost:3307','root','','userdata') or die('connection failed');


if(isset($_POST['send'])){

    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $comments = mysqli_real_escape_string($conn, $_POST['comments']);
 
    $select_message = mysqli_query($conn, "SELECT * FROM `userinfodata` WHERE user = '$user' AND email = '$email' AND mobile = '$mobile' AND comments = '$comments'") or die('query failed');
    
    if(mysqli_num_rows($select_message) > 0){
       $message[] = 'message sent already!';
    }else{
       mysqli_query($conn, "INSERT INTO `userinfodata`(user, email, mobile, comments) VALUES('$user', '$email', '$mobile', '$comments')") or die('query failed');
       $message[] = 'message sent successfully!';
    }
 
 }
 














// $servername="localhost:3307";
// $username="root";
// $password="";

// //create connection
// $conn=mysqli_connect($servername, $username,$password);

// //check connection

// if($conn){
//     die("connection failed: " . mysqli_connect_error());
// }
// echo "connected successfully";




//     $con=mysqli_connect('localhost','root','');
//     if($con){
//         echo "Connection Successful";

//     }else{
//         echo "no connection";
// }

    // mysqli_select_db($con,'userdata');
    // $user=$_POST['user'];
    // $email=$_POST['email'];
    // $mobile=$_POST['mobile'];
    // $comments=$_POST['comments'];


    //


    
// $user=$_POST['user'];
// $email=$_POST['email'];
// $mobile=$_POST['mobile'];
// // $comments=$_POST['comments'];



// $con=new mysqli('localhost:8082','root','root');
// if($con->connect_error){
//     die("failed to connect:".$con->connect_error);
// }else{
//     // stmt= $conn->prepare()
//     echo " connected successfully";
   
// }
     ?> 
    
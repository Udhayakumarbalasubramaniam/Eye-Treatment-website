<?php
$servername="localhost";
$username="root";
$password="";
$database_name="details";


$conn=mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn){
    die("Connection Failed:" . mysqli_connect_error());
    
}
if(isset($_POST['save'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $gmail = $_POST['gmail'];
    $Phone= $_POST['Phone'];
    
    $sql_query="INSERT INTO entry_details(first_name,last_name,gender,gmail,Phone)
    VALUES ('$first_name','$last_name','$gender','$email','$Phone')";
    if(mysqli_query($conn,$sql_query)){
        echo "Now Details Entry inserted successfully";
        
    }
    else{
        echo"Error : " . $sql ."".mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>



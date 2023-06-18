<?php 

 $hostname='localhost';
    $username='root';
    $password='';
    $dbname='test';
    $conn=mysqli_connect($hostname,$username,$password,$dbname);

  

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $sql = "DELETE FROM `employee` WHERE `id`='$user_id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 
?>
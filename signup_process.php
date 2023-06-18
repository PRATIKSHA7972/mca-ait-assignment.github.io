<?php
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve form data
  $student_id = $_POST['student_id'];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $mobile_no = $_POST['mobile_no'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $address = $_POST['address'];

  // Store the data in session variables
  $_SESSION['student_id'] = $student_id;
  $_SESSION['first_name'] = $first_name;
  $_SESSION['last_name'] = $last_name;
  $_SESSION['mobile_no'] = $mobile_no;
  $_SESSION['username'] = $username;
  $_SESSION['address'] = $address;
$_SESSION['password'] = $password;
  // Redirect to login page
  header("Location: login_form.php");
  exit();
}
?>

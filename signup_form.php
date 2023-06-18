<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
</head>
<body>
  <h2>Registration Form</h2>
  <form action="signup_process.php" method="POST">
    <label for="student_id">Student ID:</label>
    <input type="text" name="student_id" required><br>

    <label for="first_name">First Name:</label>
    <input type="text" name="first_name" required><br>

    <label for="last_name">Last Name:</label>
    <input type="text" name="last_name" required><br>

    <label for="mobile_no">Mobile No:</label>
    <input type="text" name="mobile_no" required><br>

    <label for="username">Username:</label>
    <input type="text" name="username" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" required><br>

    <label for="address">Address:</label>
    <textarea name="address" required></textarea><br>

    <input type="submit" value="Register">
  </form>
</body>
</html>

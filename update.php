<?php 

 $hostname='localhost';
    $username='root';
    $password='';
    $dbname='test';
    $conn=mysqli_connect($hostname,$username,$password,$dbname);

    if (isset($_POST['update'])) {
     $first_name=$_POST['first_name'];
    $last_name =$_POST['last_name'];
  $contact_no =$_POST['contact_no'];
   $id = $_POST['id'];
    $designation =$_POST['designation'];
      $department =$_POST['department'];
        $salary =$_POST['salary'];

        $sql = "UPDATE `employee` SET `first_name`='$first_name',`last_name`='$last_name',`contact_no`='$contact_no',`designation`='$designation',`department`='$department',`salary`='$salary' WHERE `id`='$id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];


    $sql = "SELECT * FROM `employee` WHERE `id`='$user_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $first_name = $row['first_name'];

            $last_name = $row['last_name'];

            $contact_no = $row['contact_no'];

            $designation  = $row['designation'];

            $department = $row['department'];
  $salary = $row['salary'];

            $id = $row['id'];

        } 

    ?>

        <h2>User Update Form</h2>

        <form action="" method="post">

          <fieldset>

            <legend>Personal information:</legend>

            First name:<br>

            <input type="text" name="first_name" value="<?php echo $first_name; ?>">

            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <br>

            Last name:<br>

            <input type="text" name="last_name" value="<?php echo $last_name; ?>">

            <br>

            contact_no:<br>

            <input type="contact_no" name="contact_no" value="<?php echo $contact_no; ?>">

            <br>

            designation:<br>

            <input type="text" name="designation" value="<?php echo $designation; ?>">

            <br>

            department:<br>

          <input type="text" name="department" value="<?php echo $department; ?>">

      <br>
       Salary:<br>

          <input type="text" name="salary" value="<?php echo $salary; ?>">

      <br>
            <input type="submit" value="Update" name="update">

          </fieldset>

        </form> 

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: display.php');

    } 

}

?> 

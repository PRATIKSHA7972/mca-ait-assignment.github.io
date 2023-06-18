
<html>
  <body>
    <center><h1> Students Information </h1></center>
 
   <?php
    try {
      
     $first_name=$_REQUEST['first_name'];
    $last_name =$_REQUEST['last_name'];
  $contact_no =$_REQUEST['contact_no'];
    $designation =$_REQUEST['designation'];
      $department =$_REQUEST['department'];
        $salary =$_REQUEST['salary'];
    $hostname='localhost';
    $username='root';
    $password='';
    $dbname='test';
    $conn=mysqli_connect($hostname,$username,$password,$dbname);

    $sql="insert into employee (first_name,last_name,contact_no,designation,department,salary) values ('$first_name','$last_name','$contact_no','$designation','$department','$salary')";
    
    mysqli_query($conn,$sql);

    
      echo "Record is added in database successully";
    } catch (error) {
     echo error;
    }
    
   
  ?>
  
<a href="display.php">Display Student Details</a>
  </body>
</html>
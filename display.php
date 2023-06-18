<html>
  <body>
    <center><h1> Students Information </h1></center>
    <table border="2" align="center" width="50%" >
    <tr><th>Roll No</th>
    <th>
      First Name
    </th>
  <th>Last Name</th>
  <th>Contact No</th>
  <th>Designation</th>
  <th>Department</th>
    <th>Salary</th>
<th>Action</th>
  </tr>
    <?php
    $hostname='localhost';
    $username='root';
    $password='';
    $dbname='test';
    $conn=mysqli_connect($hostname,$username,$password,$dbname);

    $sql="select * from employee";
    $result=mysqli_query($conn,$sql);
    while($rows=mysqli_fetch_assoc($result))
    {
      echo "<tr><th>".$rows['id']."</th><th>".$rows['first_name']."</th><th>".$rows['last_name']."</th><th>".$rows['contact_no']."</th><th>".$rows['designation']."</th><th>".$rows['department']."</th><th>".$rows['salary']."</th><th><a class='btn btn-info' href='update.php?id=".$rows['id']."'>Edit</a>&nbsp;<a class='btn btn-info' href='delete.php?id=".$rows['id']."'>Delete</a>&nbsp;</td></tr>";
  
    }
  ?>
  </table>
  </body>
</html>
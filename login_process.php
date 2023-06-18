

<?php
session_start();


// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve form data
   $username ="";
 if(isset($_POST['username'])){
   $username = $_POST['username']  ;
  }
   if(isset($_POST['password'])) { $password = $_POST['password'];
  } 

  // Validate username and password
  // In a real application, you would check against a database

  // Assuming username and password are valid
  if ($username === $_SESSION['username'] && $password === $_SESSION['password']) {
    echo "Login Successully";
    echo " <form action='Logout.php' method='POST'> <input type='submit' name='myButton' value='Logout'> </form>";
      }

      
  }


        ?>  

<p>
		Student Id: <?php if(isset($_SESSION["student_id"])) { echo $_SESSION["student_id"]; } ?>
	</p>
	<p>
		Student First Name: <?php if(isset($_SESSION["student_f_name"])) { echo $_SESSION["student_f_name"]; } ?></p>
			<p>
		Student Surname: <?php if(isset($_SESSION["student_s_name"])) { echo $_SESSION["student_s_name"]; } ?>

	<p>
		Mobile No:<?php if(isset($_SESSION["mobile_no"])) { echo $_SESSION["mobile_no"]; } ?>
	</p>

	<p>
	Address: <?php if(isset($_SESSION["address"])) { echo $_SESSION["address"]; } ?>
	</p>
		<p>
		User Name: <?php if(isset($_SESSION["username"])) { echo $_SESSION["username"]; } ?>
	</p>
		 <p>Password: <?php if(isset($_SESSION["password"])) { echo $_SESSION["password"]; } ?>
	</p>
	
	</p>
		<p><input type="submit" value="Logout"" onclick="document.write('<?php hello(5) ?>');"></span></p>
</form>
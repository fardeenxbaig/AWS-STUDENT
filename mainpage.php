
<?php include "/var/www/inc/dbinfo.inc"; ?>
<html>
<body>
<h1>Main page</h1>
<?php

  /* Connect to MySQL and select the database. */
  $connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);

  if (mysqli_connect_errno()) echo "Failed to connect to MySQL: " . mysqli_connect_error();

  $database = mysqli_select_db($connection, DB_DATABASE);

  /* Ensure that the EMPLOYEES table exists. */
  VerifyStudentTable($connection, DB_DATABASE);

  /* If input fields are populated, add a row to the EMPLOYEES table. */
  $student_id = htmlentities($_POST['ID']);
  $student_fname = htmlentities($_POST['FirstName']);
  $student_lname = htmlentities($_POST['LastName']);
  $student_cjob = htmlentities($_POST['CurrentJob']);
  $student_location = htmlentities($_POST['Location']);


  if (len($student_id) || strlen($student_fname) || strlen($student_lname) || strlen($student_cjob)) || strlen($student_location) {
    AddStudent($connection, $student_id, $student_fname, $student_lname, $student_cjob, $student_location);
  }
?>

<!-- Input form -->
<form action="<?PHP echo $_SERVER['SCRIPT_NAME'] ?>" method="POST">
</form>


<!-- Clean up. -->
<?php

  mysqli_free_result($result);
  mysqli_close($connection);

?>

</body>
</html>


<?php

/* Add an employee to the table. */
function AddStudent($connection, $id, $fname, $lname, $cjob, $location) {
   $n = mysqli_real_escape_string($connection, $id);
   $a = mysqli_real_escape_string($connection, $fname);
   $b = mysqli_real_escape_string($connection, $lname);
   $c = mysqli_real_escape_string($connection, $cjob);
   $d = mysqli_real_escape_string($connection, $location);
   $query = "INSERT INTO STUDENT (ID, FIRSTNAME, LASTNAME, CURRENTJOB, LOCATION) VALUES ('$n', '$a', '$b', '$c', '$d');";

   if(!mysqli_query($connection, $query)) echo("<p>Error adding Student data.</p>");
}

/* Check whether the table exists and, if not, create it. */
function VerifyStudentTable($connection, $dbName) {
  if(!TableExists("STUDENT", $connection, $dbName))
  {
     $query = "CREATE TABLE STUDENT (
         ID int(11),
         FIRSTNAME VARCHAR(45),
         LASTNAME VARCHAR(90),
         CURRENTJOB VARCHAR(45),
         LOCATION VARCHAR(45)
       )";

     if(!mysqli_query($connection, $query)) echo("<p>Error creating table.</p>");
  }
}

/* Check for the existence of a table. */
function TableExists($tableName, $connection, $dbName) {
  $t = mysqli_real_escape_string($connection, $tableName);
  $d = mysqli_real_escape_string($connection, $dbName);

  $checktable = mysqli_query($connection,
      "SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_NAME = '$t' AND TABLE_SCHEMA = '$d'");

  if(mysqli_num_rows($checktable) > 0) return true;

  return false;
}
?>

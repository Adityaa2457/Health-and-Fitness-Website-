<!DOCTYPE html>
<html> 
<head> 
<title>Insert Data into MySQL Database using PHP</title> 
</head> 
<body> 
<center>	
<?php 
ini_set("display_errors","1");
ini_set("display_startup_errors","1");
error_reporting(E_ALL); 
$conn = mysqli_connect("localhost", "root", "adityaraj@2457", "BroFitness");
if($conn==false)
{ 
 	die("Connection failed: ". mysqli_connect_error());
} 
  $name = $_POST["name"]; 
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $message = $_POST["message"];
  $sql = "INSERT INTO ContactUs VALUES ('$name', '$email', '$phone','$message')";
  if (mysqli_query($conn, $sql))
  {
    echo "<h3>Data inserted into database successfully</h3>.\n"
    ."Please browse your localhost php my admin to view updated data";
  } 
  else 
  { 
  	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }  
mysqli_close($conn);
?>
<br><a href="BroFitnessGym.php">Click here to go to home page</a>
</c,enter>
</body>
</html>

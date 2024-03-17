<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="sub.css">
<title> Subscriptions</title>  
</head>
<body id="bg">
  <h1 align="center">Get Your Plan and Start Getting FIT!!!</h1>
  <table align="center" border ="1" width ="75%">
  <tr>
    <th>Subscription name</th>
    <th>ID</th> 
    <th>Price</th>
    <th>Validity</th>
  </tr>  
<?php
  
  $servername = "localhost";
  $username = "root";
  $password = "adityaraj@2457";
  $databasename = "brofitness";
  
  $conn = mysqli_connect($servername, 
    $username, $password, $databasename);
  
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  
  $query = "SELECT sname,sid,price,svalidity FROM `Subscriptions`;";
  $result = mysqli_query($conn, $query);
  
  if (mysqli_num_rows($result) > 0) {
      // OUTPUT DATA OF EACH ROW
      while($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>". $row["sname"]." </td>";
          echo "<td>".$row["sid"]." </td>";
          echo "<td>". $row["price"] ."</td>";
          echo "<td>".$row["svalidity"] ."</td>";
          echo "</tr>";
      }
  } 
  else {
      echo "0 results";
  }
  
  $conn->close();
  
?>
</table>
  <h1 align="center"> What are you waiting for!! <br>
  Get Your favourite plan now !!</h1>
</body>
</html>

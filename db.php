<?php


session_start();
  
  header("location : ./index.php");
  header("location : ./index.php");

  $servername = "glc353.encs.concordia.ca";
  $username = "glc353_4";
  $password = "lovedata";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, "glc353_4");

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "<h1>Connected successfully</h1></br></br></br></br>";
?>

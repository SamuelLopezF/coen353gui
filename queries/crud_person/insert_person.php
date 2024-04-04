<?PHP
  require "../../db.php";  
  require "../../header.php";
  
  $query = "INSERT INTO relatives VALUES ('"
  .$_POST['first_name']."','"
  .$_POST['last_name']."','"
  .$_POST['medicare']."','"
  .$_POST['relatedEmployeeMedicare']."','"
  .$_POST['relationship']."','"
  .$_POST['dob']."');";


echo "QUERY = ".$query."</br> </br></br></br>";

try {
  $result = mysqli_query($conn, $query);
  echo "<h2> SUCCESS </h2>";
} catch (exception $e) {
  echo "<h2> FAILURE  ".mysqli_error($conn)." </h2>";
}

mysqli_close($conn);
?>

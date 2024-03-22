<?PHP
  require "../db.php";  

$query = "INSERT INTO client VALUES ('"
  .$_POST['medicare']."','"
  .$_POST['first_name']."','"
  .$_POST['last_name']."','"
  .$_POST['sin']."','"
  .$_POST['dob']."','"
  .$_POST['telephone']."','"
  .$_POST['role']."','"
  .$_POST['manager_medicare']."','"
  .$_POST['facility_postalcode']."',"
  ."0);";


echo "QUERY = ".$query."</br> </br></br></br>";

try {
  $result = mysqli_query($conn, $query);
  echo "<h2> SUCCESS </h2>";
} catch (exception $e) {
  echo "<h2> FAILURE  ".mysqli_error($conn)." </h2>";
}

mysqli_close($conn);
?>

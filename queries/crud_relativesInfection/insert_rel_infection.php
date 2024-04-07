<?PHP
  require "../../db.php";  
  require "../../header.php";
  
  $query = "INSERT INTO relativesInfection VALUES ('"
  .$_POST['medicare_infection']."','"
  .$_POST['type_infection']."','"
  .$_POST['date_infection']."');";


echo "QUERY = ".$query."</br> </br></br></br>";

try {
  $result = mysqli_query($conn, $query);
  echo "<h2> SUCCESS </h2>";
} catch (exception $e) {
  echo "<h2> FAILURE  ".mysqli_error($conn)." </h2>";
}

mysqli_close($conn);
?>

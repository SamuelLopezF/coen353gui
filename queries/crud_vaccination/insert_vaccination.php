<?PHP
  require "../../db.php";  
  require "../../header.php";
  
  $query = "INSERT INTO vaccination VALUES ('"
  .$_POST['medicare_vaccination']."','"
  .$_POST['date_vaccination']."','"
  .$_POST['provider_vaccination']."','"
  .$_POST['dose_number_vaccination']."','"
  .$_POST['postal_code_vaccination']."');";

  
echo "QUERY = ".$query."</br> </br></br></br>";

try {
  $result = mysqli_query($conn, $query);
  echo "<h2> SUCCESS </h2>";
} catch (exception $e) {
  echo "<h2> FAILURE  ".mysqli_error($conn)." </h2>";
}

mysqli_close($conn);
?>



<?PHP
  require "../../db.php";  
  require "../../header.php";
  
  $query = "INSERT INTO relativesVaccination VALUES ('"
  .$_POST['medicare_rel_vaccination']."','"
  .$_POST['date_rel_vaccination']."','"
  .$_POST['provider_rel_vaccination']."','"
  .$_POST['dose_number_rel_vaccination']."','"
  .$_POST['postal_code_rel_vaccination']."');";

  
echo "QUERY = ".$query."</br> </br></br></br>";

try {
  $result = mysqli_query($conn, $query);
  echo "<h2> SUCCESS </h2>";
} catch (exception $e) {
  echo "<h2> FAILURE  ".mysqli_error($conn)." </h2>";
}

mysqli_close($conn);
?>



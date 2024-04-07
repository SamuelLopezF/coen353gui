<?PHP
  require "../../header.php";
  require "../../db.php";  

  $query = "DELETE FROM relativesVaccination WHERE"
    ." medicare = ".$_POST['medicare_vaccination_delete']
    ."AND date = ".$_POST['date_vaccination_delete']
    ."AND provider = ".$_POST['provider_vaccination_delete']
    ."AND doseNumber = ".$_POST['dose_number_delete']
    .";";


echo "QUERY = ".$query."</br> </br></br></br>";

try {
  $result = mysqli_query($conn, $query);
  echo "<h2> SUCCESS </h2>";
} catch (exception $e) {
  echo "<h2> FAILURE  ".mysqli_error($conn)." </h2>";
}

mysqli_close($conn);
?>

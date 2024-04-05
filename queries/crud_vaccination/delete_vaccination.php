<?PHP
  require "../../header.php";
  require "../../db.php";  

  $query = "DELETE FROM vaccination WHERE"
    ." medicare = ".$_POST['medicare_vaccination_delete']
    .",date = ".$_POST['date_vaccination_delete']
    .",provider = ".$_POST['provider_vaccination_delete']
    .",doseNumber = ".$_POST['dose_number_delete']
    .",facility = ".$_POST['postal_code_vaccination_delete']
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

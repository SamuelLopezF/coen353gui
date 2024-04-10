<?PHP
  require "../../header.php";
  require "../../db.php";  

  $query = "DELETE FROM relativesInfection WHERE"
    ." medicare = '".$_POST['medicare_delete_infection']
    ."' AND type = '".$_POST['type_delete_infection']
    ."' AND date = '".$_POST['date_delete_infection']
    ."';";


echo "QUERY = ".$query."</br> </br></br></br>";

try {
  $result = mysqli_query($conn, $query);
  echo "<h2> SUCCESS </h2>";
} catch (exception $e) {
  echo "<h2> FAILURE  ".mysqli_error($conn)." </h2>";
}

mysqli_close($conn);
?>

<?PHP
  require "../../header.php";
  require "../../db.php";  

$query = "DELETE FROM relatives WHERE medicare = ".$_POST['medicare_id_delete'].";";


echo "QUERY = ".$query."</br> </br></br></br>";

try {
  $result = mysqli_query($conn, $query);
  echo "<h2> SUCCESS </h2>";
} catch (exception $e) {
  echo "<h2> FAILURE  ".mysqli_error($conn)." </h2>";
}

mysqli_close($conn);
?>

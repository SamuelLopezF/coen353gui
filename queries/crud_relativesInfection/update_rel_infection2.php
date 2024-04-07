
<?PHP
  require "../../db.php";  
  require "../../header.php";
  
  $query = "UPDATE relativesInfection SET ".
   "medicare = '".$_POST['medicare']."',".
   "type ='".$_POST['type']."',".
   "date ='".$_POST['date']."'".
   "WHERE ". 
   " medicare = '".$_POST['medicare_old'].
   "' AND type = '".$_POST['type_old'].
   "' AND date = '".$_POST['date_old']."';";

echo "QUERY = ".$query."</br> </br></br></br>";

try {
  $result = mysqli_query($conn, $query);
  echo "<h2> SUCCESS </h2>";
} catch (exception $e) {
  echo "<h2> FAILURE  ".mysqli_error($conn)." </h2>";
}

mysqli_close($conn);
?> 

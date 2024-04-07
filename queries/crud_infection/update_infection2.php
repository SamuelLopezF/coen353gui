<?PHP
  require "../../db.php";  
  require "../../header.php";
  
  $query = "UPDATE infection SET ".
   "medicare = '".$_POST['Medicare']."',".
   "type ='".$_POST['Type']."',".
   "date ='".$_POST['Date']."'".
   "WHERE medicare = ".$_POST['medicare_old'].";";

echo "QUERY = ".$query."</br> </br></br></br>";

try {
  $result = mysqli_query($conn, $query);
  echo "<h2> SUCCESS </h2>";
} catch (exception $e) {
  echo "<h2> FAILURE  ".mysqli_error($conn)." </h2>";
}

mysqli_close($conn);
?> 

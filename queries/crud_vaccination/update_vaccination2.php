<?PHP
  require "../../db.php";  
  require "../../header.php";
  
  $query = "UPDATE vaccination SET ".
   "medicare = '".$_POST['Medicare']."',".
   "date ='".$_POST['date']."',".
   "provider ='".$_POST['Provider']."',".
   "doseNumber ='".$_POST['doseNumber']."'".
   " WHERE".
   " medicare = ".$_POST['medicare_old'].
   " AND date = '".$_POST['date_old'].
   "' AND provider = '".$_POST['provider_old'].
   "' AND doseNumber = ".$_POST['dose_old'].";";


echo "QUERY = ".$query."</br> </br></br></br>";

try {
  $result = mysqli_query($conn, $query);
  echo "<h2> SUCCESS </h2>";
} catch (exception $e) {
  echo "<h2> FAILURE  ".mysqli_error($conn)." </h2>";
}

mysqli_close($conn);
?> 

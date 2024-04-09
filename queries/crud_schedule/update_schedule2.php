<?PHP
  require "../../db.php";  
  require "../../header.php";
  
  

  $query = "UPDATE schedule SET ".
  " startTime = '".$_POST['startTime'].
  "' ,facilityPostalCode = '".$_POST['facilityPostalCode'].
  "' ,employeeMedicare = '".$_POST['employeeMedicare'].
  "' ,date = '".$_POST['date'].
  "' WHERE ( ".
  "  startTime = '".$_POST['time_old'].
  "' AND facilityPostalCode = '".$_POST['postal_old'].
  "' AND employeeMedicare = '".$_POST['medicare_old'].
  "' AND date = '".$_POST['date_old'].
  "');";




echo "QUERY = ".$query."</br> </br></br></br>";

try {
  $result = mysqli_query($conn, $query);
  echo "<h2> SUCCESS </h2>";
} catch (exception $e) {
  echo "<h2> FAILURE  ".mysqli_error($conn)." </h2>";
}

mysqli_close($conn);
?>

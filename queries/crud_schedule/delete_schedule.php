<?PHP
  require "../../header.php";
  require "../../db.php";  

  $query = "DELETE FROM schedule WHERE "
    ."startTime = '".$_POST['startTime_schedule_delete']."'"
    ." AND endTime = '".$_POST['endTime_schedule_delete']."'"
    ." AND facilityPostalCode = '".$_POST['facility_postalCode_schedule_delete']."'"
    ." AND employeeMedicare = '".$_POST['medicare_schedule_delete']."';";



echo "QUERY = ".$query."</br> </br></br></br>";

try {
  $result = mysqli_query($conn, $query);
  echo "<h2> SUCCESS </h2>";
} catch (exception $e) {
  echo "<h2> FAILURE  ".mysqli_error($conn)." </h2>";
}

mysqli_close($conn);
?>

<?PHP
  require "../../db.php";  
  require "../../header.php";
  
  $query = "INSERT INTO schedule VALUES ('"
  .$_POST['startTime_schedule_insert']."','"
  .$_POST['endTime_schedule_insert']."','"
  .$_POST['facility_postalCode_schedule_insert']."','"
  .$_POST['medicare_schedule_insert']."','"
  .$_POST['date_schedule_insert']."');";

  
echo "QUERY = ".$query."</br> </br></br></br>";

try {
  $result = mysqli_query($conn, $query);
  echo "<h2> SUCCESS </h2>";
} catch (exception $e) {
  echo "<h2> FAILURE  ".mysqli_error($conn)." </h2>";
}

mysqli_close($conn);
?>


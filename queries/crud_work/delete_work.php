<?PHP
  require "../../header.php";
  require "../../db.php";  

  $query = "DELETE FROM work WHERE"
  ." Medicare = '".$_POST['medicare_work_delete']."'"
  ." AND postalcode = '".$_POST['facility_postalCode_work_delete']."'"
  ." AND startDate = '".$_POST['startDate_work_delete']."'"
  ." AND endDate = '".$_POST['endDate_work_delete']."';";



echo "QUERY = ".$query."</br> </br></br></br>";

try {
  $result = mysqli_query($conn, $query);
  echo "<h2> SUCCESS </h2>";
} catch (exception $e) {
  echo "<h2> FAILURE  ".mysqli_error($conn)." </h2>";
}

mysqli_close($conn);
?>

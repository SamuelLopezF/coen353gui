<?PHP
  require "../../db.php";  
  require "../../header.php";
  
  $query = "INSERT INTO work VALUES ('"
  .$_POST['medicare_work']."','"
  .$_POST['facility_postalCode_work']."','"
  .$_POST['startDate_work']."','"
  .$_POST['endDate_work']."', DEFAULT);";


  
echo "QUERY = ".$query."</br> </br></br></br>";

try {
  $result = mysqli_query($conn, $query);
  echo "<h2> SUCCESS </h2>";
} catch (exception $e) {
  echo "<h2> FAILURE  ".mysqli_error($conn)." </h2>";
}

mysqli_close($conn);
?>



<?PHP
  require "../../db.php";  
  require "../../header.php";
  
  

  $query = "UPDATE work SET ".
  "medicare = '".$_POST['Medicare'].
  "' ,postalcode = '".$_POST['postalcode'].
  "' ,startDate = '".$_POST['startDate'].
  "' ,endDate = '".$_POST['endDate'].
  "' WHERE ( ".
  "medicare = '".$_POST['old_medicare'].
  "' AND startDate = '".$_POST['old_start'].
  "' AND postalcode = '".$_POST['old_postal'].
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

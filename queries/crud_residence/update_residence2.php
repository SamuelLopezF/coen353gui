<?PHP
  require "../../header.php";
  require "../../db.php";  

$query = "UPDATE residence SET ".
  "medicare_of_employee = '".$_POST['medicare_of_employee'].
  "',addres = '".$_POST['addres '].
  "',city = '".$_POST['city'].
  "',province = '".$_POST['province'].
  "',postal_code = '".$_POST['postal_code'].
  "',type = '".$_POST['type'].
 // "', primary = ".$_POST['primary'].
  "' WHERE postal_code = '".$_POST['old_postalcode']."';";


echo "QUERY = ".$query."</br> </br></br></br>";

try {
  $result = mysqli_query($conn, $query);
  echo "<h2> SUCCESS </h2>";
} catch (exception $e) {
  echo "<h2> FAILURE  ".mysqli_error($conn)." </h2>";
}

mysqli_close($conn);
?>

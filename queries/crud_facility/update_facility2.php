
<?PHP
  require "../../header.php";
  require "../../db.php";  

$query = "UPDATE client SET ".
  "name = '".$_POST['name'].
  "',address = '".$_POST['address'].
  "',postalcode= '".$_POST['postalcode'].
  "',city= '".$_POST['city'].
  "',province= '".$_POST['province'].
  "',telephone_number = '".$_POST['telephone_number'].
  "',type = '".$_POST['type'].
  "',manager_facility_name = '".$_POST['manager_facility_name'].
  " WHERE sin = ".$_POST['sin'].";";


echo "QUERY = ".$query."</br> </br></br></br>";

try {
  $result = mysqli_query($conn, $query);
  echo "<h2> SUCCESS </h2>";
} catch (exception $e) {
  echo "<h2> FAILURE  ".mysqli_error($conn)." </h2>";
}

mysqli_close($conn);
?>

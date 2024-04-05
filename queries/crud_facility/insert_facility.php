<?PHP
  require "../../db.php";  
  require "../../header.php";
  
  $query = "INSERT INTO facility VALUES ('"
  .$_POST['name_facility']."','"
  .$_POST['address_facility']."','"
  .$_POST['postal_code_facility']."','"
  .$_POST['city_facility']."','"
  .$_POST['province_facility']."','"
  .$_POST['phone_facility']."','"
  .$_POST['type_facility']."','"
  .$_POST['manager_medicare_facility']."','"
  .$_POST['max']."');";


echo "QUERY = ".$query."</br> </br></br></br>";

try {
  $result = mysqli_query($conn, $query);
  echo "<h2> SUCCESS </h2>";
} catch (exception $e) {
  echo "<h2> FAILURE  ".mysqli_error($conn)." </h2>";
}

mysqli_close($conn);
?>

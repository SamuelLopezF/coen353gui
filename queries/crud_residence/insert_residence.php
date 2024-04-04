
<?PHP
  require "../../db.php";  
  require "../../header.php";
  
  $query = "INSERT INTO residence VALUES ('"
  .$_POST['medicare_residence_insert']."','"
  .$_POST['address_residence']."','"
  .$_POST['city_residence']."','"
  .$_POST['province_residence']."','"
  .$_POST['postal_code_residence']."','"
  .$_POST['type_residence']."','"
  .$_POST['primary_residence']."');";


echo "QUERY = ".$query."</br> </br></br></br>";

try {
  $result = mysqli_query($conn, $query);
  echo "<h2> SUCCESS </h2>";
} catch (exception $e) {
  echo "<h2> FAILURE  ".mysqli_error($conn)." </h2>";
}

mysqli_close($conn);
?>

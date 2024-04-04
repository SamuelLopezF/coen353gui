<?PHP
  require "../../header.php";
  require "../../db.php";  

$query = "UPDATE client SET ".
  "firstname = '".$_POST['firstname'].
  "',lastname = '".$_POST['lastname'].
  "',dob = '" .$_POST['dob'].
  "',telephone = ".$_POST['telephone'].
  ",role = '".$_POST['role'].
  "',managerMedicare = '".$_POST['managerMedicare'].
  "',facilityPostalCode = '".$_POST['facilityPostalCode'].
  "',currentlyInfected= ".$_POST['currentlyInfected'].
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

<?PHP
  require "../../db.php";  
  require "../../header.php";
  
  

  $query = "UPDATE relatives SET ".
  "firstname = '".$_POST['firstname'].
  "',lastname = '".$_POST['lastname'].
  "',dob = '" .$_POST['dob'].
  "',relatedEmployeeMedicare= ".$_POST['relatedEmployeeMedicare'].
  ",relationship = '".$_POST['relationship'].
  //"',currentlyInfected = ".$_POST['currentlyInfected'].
  " 'WHERE medicare = ".$_POST['medicare'].";";




echo "QUERY = ".$query."</br> </br></br></br>";

try {
  $result = mysqli_query($conn, $query);
  echo "<h2> SUCCESS </h2>";
} catch (exception $e) {
  echo "<h2> FAILURE  ".mysqli_error($conn)." </h2>";
}

mysqli_close($conn);
?>

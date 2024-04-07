<?PHP
  require "../../db.php";  
  require "../../header.php";
  
  $query = "SELECT * FROM residence WHERE postal_code= '".$_POST['postal_code_residence_update']."';";
  echo "QUERY = ".$query."</br> </br></br></br>";
try {
 $old_postalcode = $_POST['postal_code_residence_update'];
 
  $result = mysqli_query($conn, $query);
  echo "<h2> SUCCESS </h2>";
  echo '<form action="./update_residence2.php" method = "POST" >';
  
        echo "<input name=old_postalcode readonly value =".$old_postalcode."></input></br>";
  while($row = mysqli_fetch_assoc($result))
    {
    
      $_POST['result'] = $row;
      foreach ($row as $field=> $value) 
      {
 
 
        echo "<p>".$field."</p>";
        echo "<input name=".$field." value =".$value."></input></br>";
      }
    }
  echo"<input type='submit'> value='UPDATE'>";
  echo"</form>";
  echo"</br>";


  mysqli_close($conn);


} catch (exception $e) {
  echo "<h2> FAILURE  ".mysqli_error($conn)." </h2>";
}

?>

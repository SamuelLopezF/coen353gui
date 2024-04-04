
<?PHP
  require "../../db.php";  
  require "../../header.php";
  
  $query = "SELECT * FROM client WHERE client.sin = ".$_POST['sin_id_update'].";";
  echo "QUERY = ".$query."</br> </br></br></br>";
try {
 
 
  $result = mysqli_query($conn, $query);
  echo "<h2> SUCCESS </h2>";
  echo '<form action="./update_employee2.php" method = "POST" >';
  
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

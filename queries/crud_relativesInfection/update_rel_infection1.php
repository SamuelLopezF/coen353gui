<?PHP
  require "../../db.php";  
  require "../../header.php";

  $query = "SELECT * FROM relativesInfection WHERE ".
    "medicare = '".$_POST['medicare_update_infection']."'".
    "AND type = '".$_POST['type_update_infection']."'".
    "AND date = '".$_POST['date_update_infection']."';";
  echo "QUERY = ".$query."</br></br>";

  $medicare_old = $_POST['medicare_update_infection'];
  $type_old = $_POST['type_update_infection'];
  $date_old = $_POST['date_update_infection'];

  if($result = mysqli_query($conn, $query)){
 
    $resultArray = array();
    $tempArray = array();

    echo '<form action="./update_rel_infection2.php" method = "POST" >';
    echo"</br>";
    echo"modifying : ";
    echo "<input name=medicare_old value =".$medicare_old." readonly ></input></br>";
    echo "<input name=type_old value =".$type_old." readonly ></input></br>";
    echo "<input name=date_old value =".$date_old." readonly ></input></br>";
    while($row = mysqli_fetch_assoc($result))
    {
      echo"<tr>";
      foreach ($row as $field=> $value) {
  
        echo "<p>".$field."</p>";
        echo "<input name=".$field." value =".$value."></input></br>";
      }
      echo"</tr>";
    }
    echo"</br>";
    echo"<input type='submit' value='UPDATE'>";
    echo"</form>";
  }

  mysqli_close($conn);
?>

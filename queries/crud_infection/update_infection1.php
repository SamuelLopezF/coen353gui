<?PHP
  require "../../db.php";  
  require "../../header.php";

  $query = "SELECT * FROM infection WHERE ".
    "medicare = '".$_POST['medicare_update_infection']."'".
    "AND type = '".$_POST['type_update_infection']."'".
    "AND date = '".$_POST['date_update_infection']."';";
  echo "QUERY = ".$query."</br></br>";

  $medicare_old = $_POST['medicare_update_infection'];

  if($result = mysqli_query($conn, $query)){
 
    $resultArray = array();
    $tempArray = array();

    echo '<form action="./update_infection2.php" method = "POST" >';
    echo"</br>";
    echo"modifying : " . $medicare_old;
    echo"<table border=1>";


        echo "<input name=medicare_old value =".$medicare_old."></input></br>";
    while($row = mysqli_fetch_assoc($result))
    {
      echo"<tr>";
      foreach ($row as $field=> $value) {
  
        echo "<p>".$field."</p>";
        echo "<input name=".$field." value =".$value."></input></br>";
      }
      echo"</tr>";
    }
    echo"</table>";
    echo"</br>";
    echo"<input type='submit' value='UPDATE'>";
  }

  mysqli_close($conn);
?>

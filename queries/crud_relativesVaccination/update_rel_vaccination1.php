<?PHP
  require "../../db.php";  
  require "../../header.php";

  $query = "SELECT * FROM relativesVaccination WHERE ".
    "medicare = '".$_POST['medicare_rel_vaccination_update']."'".
    "AND date = '".$_POST['date_rel_vaccination_update']."'".
    "AND provider = '".$_POST['provider_rel_vaccination_update']."';";
    "AND doseNumber = '".$_POST['dose_number_rel_vaccination_update']."';";
  echo "QUERY = ".$query."</br></br>";

  $medicare_old = $_POST['medicare_rel_vaccination_update'];
  $date_old = $_POST['date_rel_vaccination_update'];
  $provider_old = $_POST['provider_rel_vaccination_update'];
  $dose_old= $_POST['dose_number_rel_vaccination_update'];

  if($result = mysqli_query($conn, $query)){
 
    $resultArray = array();
    $tempArray = array();

    echo '<form action="./update_rel_vaccination2.php" method = "POST" >';
    echo"</br>";
    echo"modifying : " . $medicare_old;
    echo"<table border=1>";


    echo "<input name=medicare_old readonly value =".$medicare_old."></input></br>";
    echo "<input name=date_old readonly value =".$date_old."></input></br>";
    echo "<input name=provider_old readonly value =".$provider_old."></input></br>";
    echo "<input name=dose_old readonly value =".$dose_old."></input></br>";
    
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

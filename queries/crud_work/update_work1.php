<?PHP
  require "../../db.php";  
  require "../../header.php";

  $query = "SELECT * FROM work WHERE "
    ."medicare = '".$_POST['medicare_work_update']
    ."' AND startDate =  '".$_POST['startDate_update_work']
    ."' AND postalcode ='".$_POST['facility_postalCode_work_update']."';";
  
  
  $old_medicare = $_POST['medicare_work_update'];
  $old_start= $_POST['startDate_update_work'];
  $old_postal= $_POST['facility_postalCode_work_update'];

  echo "QUERY = ".$query."</br></br>";

  if($result = mysqli_query($conn, $query)){
 
  echo '<form action="./update_work2.php" method = "POST" >';
    $resultArray = array();
    $tempArray = array();

    echo "<a>Modifying ID : ".$old_medicare."</a></br>";
    echo "<input name=old_medicare readonly value =".$old_medicare."></input></br>";
    echo "<input name=old_start readonly value =".$old_start."></input></br>";
    echo "<input name=old_postal readonly value =".$old_postal."></input></br>";
    echo"</br>";
    while($row = mysqli_fetch_assoc($result))
    {
      echo"<tr>";
      foreach ($row as $field=> $value) {
        echo "<p>".$field."</p>";
        echo "<input name=".$field." value =".$value."></input></br>";
      }
      echo"</tr>";
    }
   echo"<input type='submit' value='UPDATE'>";
  echo"</form>";
    echo"</br>";
  }

  mysqli_close($conn);
?>

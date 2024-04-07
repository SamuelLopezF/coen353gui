<?PHP
  require "../../db.php";  
  require "../../header.php";

  $query = "SELECT * FROM schedule WHERE ".
    " startTime = '".$_POST['startTime_schedule_update']."'".
    " AND facilityPostalCode= '".$_POST['facility_postalCode_schedule_update']."'".
    " AND employeeMedicare = '".$_POST['medicare_schedule_update']."'".
    " AND date = '".$_POST['date_schedule_update']."';";
  echo "QUERY = ".$query."</br></br>";

  $medicare_old = $_POST['medicare_schedule_update'];
  $postal_old = $_POST['facility_postalCode_schedule_update'];
  $date_old = $_POST['date_schedule_update'];
  $time_old = $_POST['startTime_schedule_update'];

  if($result = mysqli_query($conn, $query)){
 
    $resultArray = array();
    $tempArray = array();

    echo '<form action="./update_schedule2.php" method = "POST" >';
    echo"</br>";
    echo"modifying : " . $medicare_old;
    echo"<table border=1>";


    echo "<input name=medicare_old value =".$medicare_old."></input></br>";
    echo "<input name=postal_old value =".$postal_old."></input></br>";
    echo "<input name=date_old value =".$date_old."></input></br>";
    echo "<input name=time_old value =".$time_old."></input></br>";
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

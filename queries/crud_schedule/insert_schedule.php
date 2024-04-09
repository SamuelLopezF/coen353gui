<?PHP
  require "../../db.php";  
  require "../../header.php";

  $query = "INSERT INTO schedule VALUES ('"
  .$_POST['startTime_schedule_insert']."','"
  .$_POST['endTime_schedule_insert']."','"
  .$_POST['facility_postalCode_schedule_insert']."','"
  .$_POST['medicare_schedule_insert']."','"
  .$_POST['date_schedule_insert']
  ."')";

  $start = $_POST['startTime_schedule_insert'];
  $facility = $_POST['facility_postalCode_schedule_insert'];
  $medicare = $_POST['medicare_schedule_insert'];
  $date = $_POST['date_schedule_insert'];


  //first we let the query trough
        try {
          echo "QUERY = ".$query."</br> </br></br></br>";
          $result = mysqli_query($conn, $query);
          echo "<h2> SUCCESS </h2>";
        } catch (exception $e2) {
          echo "<h2> FAILURE 3 ".mysqli_error($conn)." </h2>";
        }

  $conflict_query = "select * from schedule as a , schedule as b WHERE "
    ."a.employeeMedicare = b.employeeMedicare"
    ." AND a.facilityPostalCode <> b.facilityPostalCode"
    ." AND a.date = b.date "
    ." AND ADDTIME(b.endTime , '02:00:00') >= a.startTime"
    ." AND SUBTIME(a.endTime , '02:00:00') >= b.startTime";
   
    try {
      $conflict_result= mysqli_query($conn, $conflict_query);

      //we look if the new query conflicts with an already existing schedule and throw an error
      while($row = mysqli_fetch_assoc($conflict_result))
      {
        echo '</br>Conflict detected</br>';
        foreach ($row as $field => $value) {
          //print the conflicting query
          echo '</br> '.$field.' -> '.$value; 
        }  
        throw new Exception("Error Processing Request", 1);
      }
    } catch (exception $e) {
      echo "<h2> FAILURE ERROR ADDIND SCHEDULE : conflicting schedules ".mysqli_error($conn)." </h2>";
     $delete_query = "DELETE FROM schedule WHERE "
    ."startTime = '".$start."'"
    ." AND facilityPostalCode = '".$facility."'"
    ." AND employeeMedicare = '".$medicare."'"
    ." AND date = '".$date."'";

    try {
      $delete_result= mysqli_query($conn, $delete_query);
      echo'<h2> SUCCESS : removed last query';
    } catch (exception $del_e) {
      echo "<h2> FAILURE ".mysqli_error($conn)." </h2>";
    }  
   }
  
  


mysqli_close($conn);
?>


<?PHP
  require "../../db.php";  
  require "../../header.php";
  
  $insert_infection_query = "INSERT INTO infection VALUES ('"
  .$_POST['medicare_infection']."','"
  .$_POST['type_infection']."','"
  .$_POST['date_infection']."');";

$medicare = $_POST['medicare_infection'];
$date = $_POST['date_infection'];
$type = $_POST['type_infection'];


echo "QUERY = ".$insert_infection_query."</br> </br></br></br>";
$notify_query = "SELECT b.employeeMedicare ,b.facilityPostalCode FROM schedule as a , schedule as b where '".$medicare."' = a.employeeMedicare"
  ." AND a.employeeMedicare <> b.employeeMedicare"
  ." AND a.facilityPostalCode = b.facilityPostalCode"
  ." AND a.date >= SUBDATE('".$date."', INTERVAL 14 DAY)"
  ." AND b.date >= SUBDATE('".$date."', INTERVAL 14 DAY)"
  ." AND a.date = b.date"
  ." AND b.endTime >= a.startTime"
  ." AND a.endTime >= b.startTime;";
 
 
try {
  $res1= mysqli_query($conn, $notify_query);
  while($inf_row = mysqli_fetch_assoc($res1))
  {
    echo 'overlap detected : </br>';
    foreach ($inf_row as $field => $value) {
      echo $field.'---> '.$value.'</br>';
     
      if($field == 'employeeMedicare')
      {
        
        try {
              echo 'Emailing employees';
              $email_query = "INSERT INTO emails VALUES ("
                ." '".$date."', " 
                ." '".$value."', " 
                ." 'One of your collegues whom you worked with in the past"
                ." two weeks has been infected with ".$type."...',"
                ." 'WARNING',"
                ." '".$inf_row['facilityPostalCode']."'); " ;
              echo '</br> QUERY : '.$email_query;
              $email_result= mysqli_query($conn, $email_query);
            } catch (exception $e) {
              echo "<h2> FAILURE  ".mysqli_error($conn)." </h2>";
            }
          }
         }
  }

} catch (exception $e) {
  echo "<h2> FAILURE  ".mysqli_error($conn)." </h2>";
}

//insert the infection row
try {
  $result = mysqli_query($conn, $insert_infection_query);

  $cancel_email_query = "INSERT INTO emails VALUES ("
                ." '".$date."', " 
                ." '".$medicare."', " 
                ." 'You have been removed any scheduled  upcomming assignment since you've contracted an illness"
                ." 'CANCELED');"; 
  try {
  $result = mysqli_query($conn, $cancel_email_query);
  } catch (exception $e) {
    echo 'could not send email to infected employee';
  }   


  echo "<h2> SUCCESS </h2>";
} catch (exception $e) {
  echo "<h2> FAILURE  ".mysqli_error($conn)." </h2>";
}

mysqli_close($conn);
?>

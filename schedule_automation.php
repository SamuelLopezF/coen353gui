<?PHP 


  require "./db.php";
  require "./header.php";
  
 
  
  $work_query = "SELECT Medicare, postalcode FROM work WHERE endDate = '0000-00-00';";
  
  echo "</br>QUERY = ".$work_query."</br></br>";

  try {
    
    if($result = mysqli_query($conn, $work_query)){
      
      while($row = mysqli_fetch_assoc($result))
      {
          foreach ($row as $field => $value) {
          {
            echo '</br> '.$field.' : '.$value;
            if($field == 'Medicare')
            {
              $medicare = $value;

              for ($i=0; $i < 14; $i++) { 
                $maybe = mt_rand(0,1);
                $start = mt_rand(0,16); 


                $shift = mt_rand(2,8);
                $end = $start + $shift;
                $end = $end.':00:00';
                $start = $start.':00:00';
                $facility = $row['postalcode'];
                
                $date = '2024-04-07';
                $date = date('Y-m-d',strtotime($date.  ' +'.$i.' days'));
                if($maybe)
                {


                  echo '</br> day : '.$i.' start : '.$start.'  end :  '.$end. '  date : '. $date; 
                       $query = "INSERT INTO schedule VALUES ('"
                        .$start."','"
                        .$end."','"
                        .$row['postalcode']."','"
                        .$value."','"
                        .$date."'"
                         .")";
                  echo '</br> Q : '.$query;
                  

                    //first we let the query trough
                          try {
                            $insert_result = mysqli_query($conn, $query);
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
                        while($con_row = mysqli_fetch_assoc($conflict_result))
                        {
                          echo '</br>Conflict detected</br>';
                          foreach ($con_row as $con_field => $con_value) {
                            //print the conflicting query
                            echo '</br> '.$con_field.' -> '.$con_value; 
                          }  
                          throw new Exception("Error Processing Request", 1);
                        }
                      } catch (exception $e) {
                        echo "<h1> FAILURE ERROR ADDIND SCHEDULE : conflicting schedules ".mysqli_error($conn)." </h2>";
                        
                      $delete_query = "DELETE FROM schedule WHERE "
                      ." startTime = '".$start."'"
                      ." AND facilityPostalCode = '".$facility."'"
                      ." AND employeeMedicare = '".$medicare."'"
                      ." AND date = '".$date."'";

                      try {
                        $delete_result= mysqli_query($conn, $delete_query);
                        echo'<h1> SUCCESS : removed last query';
                      } catch (exception $del_e) {
                        echo "<h2> FAILURE ".mysqli_error($conn)." </h2>";
                      }  
                     }
                            
                }   
              }
            }
          }
        }
      }
    }   
  } catch (exception $e) {
    echo "<h2> FAILURE  ".mysqli_error($conn)." </h2>";
  }

  


?>

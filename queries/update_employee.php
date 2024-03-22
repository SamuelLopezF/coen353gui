
<?PHP
  require "../db.php";  

  $query = "SELECT * FROM client WHERE client.sin = ".$_GET['sin_id'].";";
  echo "QUERY = ".$query."</br> </br></br></br>";

  if($result = mysqli_query($conn, $query)){
 
    $resultArray = array();
    $tempArray = array();
  

    echo"</br>";
    echo"<table border=1>";
    while($row = mysqli_fetch_assoc($result))
    {
      echo"<tr>";
      foreach ($row as $field=> $value) {
        echo "<td>".htmlspecialchars($value)."</td>";
      }
      echo"</tr>";
    }
    echo"</table>";
    echo"</br>";
  }

  mysqli_close($conn);
?>


  <h3>UPDATE</h3>
  <form action="./queries/update.php" method="POST">
      MEDICARE : <input type="number" name="medicare" id="medicare_id" value=""></br>
      FIRST NAME : <input type="text" name="first_name" id="first_name_id" value=""></br>
      LAST NAME : <input type="text" name="last_name" id="last_name_id" value=""></br>
      SIN : <input type="number" name="sin" id="sin_id" value=""></br>
      DOB : <input type="date" name="dob" id="dob_id" value=""></br>
      TELEPHONE : <input type="number" name="telephone" id="telephone_id" value=""></br>
      ROLE : <input type="text" name="role" id="role_id" value=""></br>
      MANAGER MEDICARE : <input type="number" name="manager_medicare" id="manager_medicare_id" value=""></br>
      FACILITY POSTALCODE : <input type="text" name="facility_postalcode" id="facility_postalcode_id" value=""></br>
  </form>






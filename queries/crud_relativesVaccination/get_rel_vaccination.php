<?PHP
  require "../../db.php";  
  require "../../header.php";

  $query = "SELECT * FROM relativesVaccination WHERE medicare= '".$_GET['medicare_rel_vaccination_get']."';";

  echo "QUERY = ".$query."</br></br>";

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

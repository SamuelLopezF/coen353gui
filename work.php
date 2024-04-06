<?PHP 
  require("./header.php");
?>

<body>
  <h2>CRUD work<h2>
  <h3>GET</h3>
  <form action="./queries/crud_work/get_work.php" method="GET">
      MEDICARE: <input type="number" name="medicare_work_get" id="" value=""></br>
    <input type="submit" value="GET"> 
  </form>
  <h3>INSERT</h3>
  <form action="./queries/crud_work/insert_work.php" method="POST">
  MEDICARE: <input type="number" name="medicare_work" id="" value=""></br>
  FACILITY POSTAL CODE: <input type="text" name="facility_postalCode_work" id="" value=""></br>
      START DATE: <input type="date" name="startDate_work" id="" value=""></br>
      END DATE: <input type="date" name="endDate_work" id="" value=""></br>
      
    <input type="submit" value="INSERT"> 
  </form>
  <h3>UPDATE</h3>
  <form action="./queries/crud_schedule/update_schedule.php" method="POST">
  MEDICARE: <input type="number" name="medicare_work_update" id="" value=""></br>
  FACILITY POSTAL CODE: <input type="text" name="facility_postalCode_work_update" id="" value=""></br>
      START DATE: <input type="date" name="startDate_work_update" id="" value=""></br>
      END DATE: <input type="date" name="endDate_work_update" id="" value=""></br>
<input type="submit" value="UPDATE"> 
  </form>
  <h3>DELETE</h3>
  <form action="./queries/crud_work/delete_work.php" method="POST">
  MEDICARE: <input type="number" name="medicare_work_delete" id="" value=""></br>
  FACILITY POSTAL CODE: <input type="text" name="facility_postalCode_work_delete" id="" value=""></br>
      START DATE: <input type="date" name="startDate_work_delete" id="" value=""></br>
      END DATE: <input type="date" name="endDate_work_delete" id="" value=""></br>
      <input type="submit" value="DELETE"> 
  </form>



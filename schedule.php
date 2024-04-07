<?PHP 
  require("./header.php");
?>

<body>
  <h2>CRUD schedule<h2>
  <h3>GET</h3>
  <form action="./queries/crud_schedule/get_schedule.php" method="GET">
      MEDICARE: <input type="number" name="medicare_schedule_get" id="" value=""></br>
    <input type="submit" value="GET"> 
  </form>
  <h3>INSERT</h3>
  <form action="./queries/crud_schedule/insert_schedule.php" method="POST">
      START TIME: <input type="time" name="startTime_schedule_insert" id="" value=""></br>
      END TIME: <input type="time" name="endTime_schedule_insert" id="" value=""></br>
      FACILITY POSTAL CODE: <input type="text" name="facility_postalCode_schedule_insert" id="" value=""></br>
      DATE: <input type="date" name="date_schedule_insert" id="" value=""></br>
      MEDICARE: <input type="number" name="medicare_schedule_insert" id="" value=""></br>
    <input type="submit" value="INSERT"> 
  </form>
  <h3>UPDATE</h3>
  <form action="./queries/crud_schedule/update_schedule1.php" method="POST">
      START TIME: <input type="time" name="startTime_schedule_update" id="" value=""></br>
      END TIME: <input type="time" name="endTime_schedule_update" id="" value=""></br>
      FACILITY POSTAL CODE: <input type="text" name="facility_postalCode_schedule_update" id="" value=""></br>
      DATE: <input type="date" name="date_schedule_update" id="" value=""></br>
      MEDICARE: <input type="number" name="medicare_schedule_update" id="" value=""></br>
<input type="submit" value="UPDATE"> 
  </form>
  <h3>DELETE</h3>
  <form action="./queries/crud_schedule/delete_schedule.php" method="POST">
      START TIME: <input type="time" name="startTime_schedule_update" id="" value=""></br>
      END TIME: <input type="time" name="endTime_schedule_update" id="" value=""></br>
      FACILITY POSTAL CODE: <input type="text" name="facility_postalCode_schedule_delete" id="" value=""></br>
      MEDICARE: <input type="number" name="medicare_schedule_delete" id="" value=""></br>
      <input type="submit" value="DELETE"> 
  </form>



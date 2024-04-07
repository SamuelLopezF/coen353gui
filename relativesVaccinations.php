<?PHP 
  require("./header.php");
?>

<body>
  <h2>CRUD vaccination<h2>
  <h3>GET</h3>
  <form action="./queries/crud_relativesVaccination/get_rel_vaccination.php" method="GET">
    MEDICARE: <input type="number" name="medicare_rel_vaccination_get" id="" value="">
    <input type="submit" value="GET"> 
  </form>
  <h3>INSERT</h3>
  <form action="./queries/crud_relativesVaccination/insert_rel_vaccination.php" method="POST">
      MEDICARE: <input type="number" name="medicare_rel_vaccination" id="" value=""></br>
      DATE: <input type="date" name="date_rel_vaccination" id="dob_id" value=""></br>
      PROVIDER: <input type="text" name="provider_rel_vaccination" id="" value=""></br>
      DOSE NUMBER: <input type="text" name="dose_number_rel_vaccination" id="" value=""></br>
      FACILITY POSTAL CODE : <input type="text" name="postal_code_rel_vaccination" id="" value=""></br>
    <input type="submit" value="INSERT"> 
  </form>
  <h3>UPDATE</h3>
  <form action="./queries/crud_relativesVaccination/update_rel_vaccination1.php" method="POST">
      MEDICARE: <input type="number" name="medicare_rel_vaccination_update" id="" value=""></br>
      DATE: <input type="date" name="date_rel_vaccination_update" id="dob_id" value=""></br>
      PROVIDER: <input type="text" name="provider_rel_vaccination_update" id="" value=""></br>
      DOSE NUMBER: <input type="number" name="dose_number_rel_vaccination_update" id="" value=""></br>
<input type="submit" value="UPDATE"> 
  </form>
  <h3>DELETE</h3>
  <form action="./queries/crud_relativesVaccination/delete_rel_vaccination.php" method="POST">
      MEDICARE: <input type="number" name="medicare_rel_vaccination_delete" id="" value=""></br>
      DATE: <input type="date" name="date_rel_vaccination_delete" id="dob_id" value=""></br>
      PROVIDER: <input type="text" name="city_rel_vaccination_delete" id="" value=""></br>
      DOSE NUMBER: <input type="number" name="dose_number_delete" id="" value=""></br>
      FACILITY POSTAL CODE : <input type="text" name="postal_code_rel_vaccination_delete" id="" value=""></br>
      <input type="submit" value="DELETE"> 
  </form>



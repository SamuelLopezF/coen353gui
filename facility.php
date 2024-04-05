<?PHP 
  require("./header.php");
?>

<body>
  <h2>CRUD facility<h2>
  <h3>GET</h3>
  <form action="./queries/crud_facility/get_facility.php" method="GET">
    POSTAL CODE: <input type="text" name="postal_code_facility_get" id="postal_code_facility_get" value="">
    <input type="submit" value="GET"> 
  </form>
  <h3>INSERT</h3>
  <form action="./queries/crud_facility/insert_facility.php" method="POST">
      NAME: <input type="text" name="name_facility" id="" value=""></br>
      ADDRESS: <input type="text" name="address_facility" id="" value=""></br>
      POSTAL_CODE: <input type="text" name="postal_code_facility" id="" value=""></br>
      CITY: <input type="text" name="city_facility" id="" value=""></br>
      PROVINCE: <input type="text" name="province_facility" id="" value=""></br>
      PHONE: <input type="number" name="phone_facility" id="" value=""></br>
      TYPE: <input type="text" name="type_facility" id="" value=""></br>
      MANAGER MEDICARE: <input type="number" name="manager_medicare_facility" id="" value=""></br>
      MAX: <input type="number" name="max_facility" id="" value=""></br>
    <input type="submit" value="INSERT"> 
  </form>
  <h3>UPDATE</h3>
  <form action="./queries/crud_facility/update_facility1.php" method="POST">
      POSTAL_CODE: <input type="text" name="postal_code_facility_update" id="" value="">
      <input type="submit" value="UPDATE"> 
  </form>
  <h3>DELETE</h3>
  <form action="./queries/crud_facility/delete_facility.php" method="POST">
      POSTAL_CODE: <input type="text" name="postal_code_facility_delete" id="" value="">
      <input type="submit" value="DELETE"> 
  </form>


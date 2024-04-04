
<?PHP 
  require("./header.php");
?>

<body>
  <h2>CRUD employee <h2>
  <h3>GET</h3>
  <form action="./queries/crud_employee/get_employee_by_sin.php" method="GET">
    SIN : <input type="number" name="sin_id" id="sin_id" value="">
    <input type="submit" value="GET"> 
  </form>
  <h3>INSERT</h3>
  <form action="./queries/crud_employee/insert_new_employee.php" method="POST">
      MEDICARE : <input type="number" name="medicare" id="medicare_id" value=""></br>
      FIRST NAME : <input type="text" name="first_name" id="first_name_id" value=""></br>
      LAST NAME : <input type="text" name="last_name" id="last_name_id" value=""></br>
      SIN : <input type="number" name="sin" id="sin_id" value=""></br>
      DOB : <input type="date" name="dob" id="dob_id" value=""></br>
      TELEPHONE : <input type="number" name="telephone" id="telephone_id" value=""></br>
      ROLE : <input type="text" name="role" id="role_id" value=""></br>
      MANAGER MEDICARE : <input type="number" name="manager_medicare" id="manager_medicare_id" value=""></br>
      FACILITY POSTALCODE : <input type="text" name="facility_postalcode" id="facility_postalcode_id" value=""></br>
    <input type="submit" value="INSERT"> 
  </form>
  <h3>UPDATE</h3>
  <form action="./queries/crud_employee/update_employee.php" method="POST">
      SIN : <input type="number" name="sin_id_update" id="sin_id_update" value="">
      <input type="submit" value="UPDATE"> 
  </form>
  <h3>DELETE</h3>
  <form action="./queries/crud_employee/delete_employee_by_sin.php" method="POST">
      SIN : <input type="number" name="sin_id_delete" id="sin_id" value="">
      <input type="submit" value="DELETE"> 
  </form>


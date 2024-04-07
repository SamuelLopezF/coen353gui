
<?PHP 
  require("./header.php");
?>

<body>
  <h2>CRUD RESIDENCE<h2>
  <h3>GET</h3>
  <form action="./queries/crud_residence/get_residence.php" method="GET">
    POSTAL CODE: <input type="text" name="postal_code_residence_get" id="postal_code_residence_get" value="">
    <input type="submit" value="GET"> 
  </form>
  <h3>INSERT</h3>
  <form action="./queries/crud_residence/insert_residence.php" method="POST">
      MEDICARE OF EMPLOYEE : <input type="number" name="medicare_residence_insert" id="" value=""></br>
      ADDRESS: <input type="text" name="address_residence" id="" value=""></br>
      CITY: <input type="text" name="city_residence" id="" value=""></br>
      PROVINCE: <input type="text" name="province_residence" id="" value=""></br>
      POSTAL_CODE: <input type="text" name="postal_code_residence" id="" value=""></br>
      TYPE: <input type="text" name="type_residence" id="" value=""></br>
      PRIMARY (1 or 0): <input type="number" name="primary_residence" id="" value=""></br>
    <input type="submit" value="INSERT"> 
  </form>
  <h3>UPDATE</h3>
  <form action="./queries/crud_residence/update_residence1.php" method="POST">
      POSTAL_CODE: <input type="text" name="postal_code_residence_update" id="" value="">
      <input type="submit" value="UPDATE"> 
  </form>
  <h3>DELETE</h3>
  <form action="./queries/crud_residence/delete_residence.php" method="POST">
      POSTAL_CODE: <input type="text" name="postal_code_residence_delete" id="" value="">
      <input type="submit" value="DELETE"> 
  </form>



<?PHP 
  require("./header.php");
?>

<body>
  <h2>CRUD RELATIVES<h2>
  <h3>GET</h3>
  <form action="./queries/crud_residence/get_residence.php" method="GET">
    MEDICARE: <input type="number" name="medicare_get_id" id="medicare_get_id" value="">
    <input type="submit" value="GET"> 
  </form>
  <h3>INSERT</h3>
  <form action="./queries/crud_residence/insert_residence.php" method="POST">
      MEDICARE : <input type="number" name="medicare" id="medicare_id" value=""></br>
      FIRST NAME : <input type="text" name="first_name" id="first_name_id" value=""></br>
      LAST NAME : <input type="text" name="last_name" id="last_name_id" value=""></br>
      RELATIONSHIP: <input type="text" name="relationship_name" id="relationship_name" value=""></br>
      RELATED E.MEDICARE: <input type="number" name="relatedEmployeeMedicare" id="relatedEmployeeMedicare" value=""></br>
      DOB : <input type="date" name="dob" id="dob_id" value=""></br>
    <input type="submit" value="INSERT"> 
  </form>
  <h3>UPDATE</h3>
  <form action="./queries/crud_residence/update_residence.php" method="POST">
      MEDICARE : <input type="number" name="medicare_id_update" id="medicare_id_update" value="">
      <input type="submit" value="UPDATE"> 
  </form>
  <h3>DELETE</h3>
  <form action="./queries/crud_residence/delete_residence.php" method="POST">
      MEDICARE : <input type="number" name="medicare_id_delete" id="medicare_id" value="">
      <input type="submit" value="DELETE"> 
  </form>


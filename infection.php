
<?PHP 
  require("./header.php");
?>

<body>
  <h2>CRUD infection<h2>
  <h3>GET</h3>
  <form action="./queries/crud_infection/get_infection.php" method="GET">
      MEDICARE: <input type="number" name="medicare_infection" id="" value=""></br>
    <input type="submit" value="GET"> 
  </form>
  <h3>INSERT</h3>
  <form action="./queries/crud_infection/insert_infection.php" method="POST">
      MEDICARE: <input type="number" name="medicare_infection" id="" value=""></br>
      TYPE: <input type="number" name="medicare_infection" id="" value=""></br>
      DATE: <input type="date" name="dob_vacciation" id="dob_id" value=""></br>
    <input type="submit" value="INSERT"> 
  </form>
  <h3>UPDATE</h3>
  <form action="./queries/crud_infection/update_infection.php" method="POST">
      MEDICARE: <input type="number" name="medicare_infection" id="" value=""></br>
      TYPE: <input type="number" name="medicare_infection" id="" value=""></br>
      DATE: <input type="date" name="dob_vacciation" id="dob_id" value=""></br>
<input type="submit" value="UPDATE"> 
  </form>
  <h3>DELETE</h3>
  <form action="./queries/crud_infection/delete_infection.php" method="POST">
      MEDICARE: <input type="number" name="medicare_infection" id="" value=""></br>
      TYPE: <input type="number" name="medicare_infection" id="" value=""></br>
      DATE: <input type="date" name="dob_vacciation" id="dob_id" value=""></br>
      <input type="submit" value="DELETE"> 
  </form>



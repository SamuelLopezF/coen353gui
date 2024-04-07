<?PHP 
  require("./header.php");
?>

<body>
  <h2>CRUD infection<h2>
  <h3>GET</h3>
  <form action="./queries/crud_relativesInfection/get_rel_infection.php" method="GET">
      MEDICARE: <input type="number" name="medicare_infection" id="" value=""></br>
    <input type="submit" value="GET"> 
  </form>
  <h3>INSERT</h3>
  <form action="./queries/crud_relativesInfection/insert_rel_infection.php" method="POST">
      MEDICARE: <input type="number" name="medicare_infection" id="" value=""></br>
      TYPE: <input type="text" name="type_infection" id="" value=""></br>
      DATE: <input type="date" name="date_infection" id="" value=""></br>
    <input type="submit" value="INSERT"> 
  </form>
  <h3>UPDATE</h3>
  <form action="./queries/crud_relativesInfection/update_rel_infection1.php" method="POST">
      MEDICARE: <input type="number" name="medicare_update_infection" id="" value=""></br>
      TYPE: <input type="text" name="type_update_infection" id="" value=""></br>
      DATE: <input type="date" name="date_update_infection" id="" value=""></br>
<input type="submit" value="UPDATE"> 
  </form>
  <h3>DELETE</h3>
  <form action="./queries/crud_relativesInfection/delete_rel_infection.php" method="POST">
      MEDICARE: <input type="number" name="medicare_delete_infection" id="" value=""></br>
      TYPE: <input type="text" name="type_delete_infection" id="" value=""></br>
      DATE: <input type="date" name="date_delete_infection" id="" value=""></br>
      <input type="submit" value="DELETE"> 
  </form>



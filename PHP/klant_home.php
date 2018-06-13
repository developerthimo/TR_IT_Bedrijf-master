<?php
  $userrole = array("owner", "administrator", "klant");
  include("./beveiliging.php");
?>
<main class="container">
  <h1>Klant Startpagina</h1>
  <?php 
    //if (isset($_SESSION["email"]))  {
      echo "Welkom klant " . $_SESSION["email"];
    //}
  ?>
</main>
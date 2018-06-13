<?php
  $userrole = array("owner");
  include("./security.php");
?>
<main class="container">
  <h1>Eigenaar Startpagina</h1>
  <?php 
    //if (isset($_SESSION["email"]))  {
      echo "Welkom eigenaar " . $_SESSION["email"];
    //}
  ?>
</main>
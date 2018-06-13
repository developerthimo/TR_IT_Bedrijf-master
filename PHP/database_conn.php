<?php
  // **************Gegevens database localhost******************************
  // We hebben hieronder constanten gedefinieerd voor de
  // servernaam, user, password en databasenaam.
  define("SERVER_NAME", "localhost");
  define("USER_NAME", "T&R_IT_Bedrijf");
  define("PASSWORD", "Geheim!");
  define("DATABASE_NAME", "t&r_it");
  // Met myqli_connect maken we contact met onze mysql-server.
  $conn = mysqli_connect(SERVER_NAME, USER_NAME, PASSWORD, DATABASE_NAME);
  // ***********************************************************************
?>
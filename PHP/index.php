<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../vendor/bootstrap/css/style.css" rel="stylesheet">

</head>

<body>
    <?php
    
    include("./navigatie.php");
    
    ?>
    <?php
        if (isset($_GET["action"])) {
            include("./{$_GET["action"]}.php");
        } else {
            include("./home.php");
        }
    ?>
    <img src="../images/banner.png" style= "min-height: 300px; margin-top: 60px; background-size: cover;">
    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
<?php
    include ("./scriptloader.php");
?>
</body>
</html>

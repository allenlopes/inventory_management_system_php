<?php
//Start the session
session_start();
if (!isset($_SESSION['user'])) header('location: login.php');
$user = $_SESSION['user'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial scale = 1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ADD USER - INVENTORY PROCESS SYSTEM</title>
    <script src="https://kit.fontawesome.com/119f85b6a2.js"></script>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/login.css" />


</head>

<body>
    <div id="dashboardMainContainer">

        <?php include('partials/app-sidebar.php') ?>

        <div class="dashboard_content_container" id="dashboard_content_container">

            <?php include('partials/app-topnav.php') ?>

            <div class="dashboard_content">

               <!-- <div class="dashboard_content_main"></div> -->

               <?php include('test-search.php') ?>

            </div>
        </div>
    </div>

    <script src="js/script.js">

    </script>
</body>

</html>
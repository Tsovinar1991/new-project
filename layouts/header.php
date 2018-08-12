<?php
require_once 'cookies_sessions/session_on.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>News universe</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="container-fluid ">
    <div class="container header">
        <div class="navigation">
            <nav class="row ">
                <div class="col-md-4 " id="logo"><a href="index.php"><h2 >Ne<i>W</i>s Corner</h2></a></div>
                <div class="col-md-8">
                    <ul>
                        <li class="nav"><a class="nav_href" href="index.php">Home</a></li>
                        <li class="nav"><a class="nav_href" href="about_us.php">About</a></li>

                        <?php
                        if (check_session()): ?>

                            <li class="nav"><a class="nav_href" href="log_out.php">Log out</a></li>
                            <li class="nav"><a class="nav_href" href="welcome.php" title = "Profile"><?= $_SESSION['name']?></a></li>
                        <?php else: ?>
                            <li class="nav"><a class="nav_href" href="sign_up.php">Sign up</a></li>
                            <li class="nav" ><a class="nav_href" href="log_in.php">Log in</a></li>

                        <?php endif; ?>

                        <li class="nav"><a class="nav_href" href="contact.php">Contact</a></li>

                    </ul>
                </div>
            </nav>
        </div>
    </div>
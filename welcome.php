

<?php
require_once 'layouts/header.php';
require_once 'cookies_sessions/session_on.php';
//var_dump($_SESSION['name']);

?>


<?php
require_once 'layouts/left-sidebar.php';
?>
    <div class="col-md-8 right">

        <div class="container">
            <h5>Welcome <?php echo $_SESSION['name']?></h5>
            <a href ="admin.php" class="admin">Please just enter here if you want to add news.</a>
        </div>
    </div>

    </div>
    </div>
<?php require_once 'layouts/footer.php'; ?>
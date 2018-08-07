<?php
require_once 'components/db_functions.php';

require_once 'layouts/header.php';
require_once 'cookies_sessions/session_on.php';

?>

<?php
require_once 'layouts/left-sidebar.php';
?>
<div class="col-md-8 right">

    <div class="container">
        <form method="get">
            <h2 class="m_top">Are you sure , you want to log out?</h2>

            <button  type ="submit" name="yes">Yes</button>
            <button type ="submit" name="no">No</button>

            <?php
            if (isset($_GET['yes']))
            session_destroy();
            else{
                echo "<br>";
                echo "Thank you for Cooperation!";
            }

            ?>


        </form>
    </div>
</div>

    </div>
    </div>
<?php require_once 'layouts/footer.php'; ?>
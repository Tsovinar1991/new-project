
<?php
require_once 'components/db_functions.php';

require_once 'layouts/header.php';
require_once 'cookies_sessions/session_on.php';

?>



<?php


require_once 'valid/admin_validate.php';

$sign_email = $_POST['sign_email'];
$sign_password = md5(($_POST['sign_password']));
$remember_me = $_POST['checkbox'];
$query = $conn->query("Select * from registr_s where email = '$sign_email' and password ='$sign_password' ");
$count = $query->rowcount();
$row = $query->fetch();

if ($count > 0)
{
    session_start();
    $_SESSION['id'] = $row['id'];
    header('location:welcome.php');
}


if($_POST["checkbox"]=='1' || $_POST["checkbox"]=='on')
{
    $hour = time() + 3600 * 24 * 30;
    setcookie('sign_email', $sign_email, $hour);

}



////anpayman stugel email@ vor krknvox chlini
//sha1

//checklogin funkcia grel/// if isseet session id

///mehatmel cookin stugel miayn ayn depqum ete remember me e sexmvac
///
///
/// stugel sessian headerum ete tru  e korcnel log_in panel , display block anel welcome and logout ejer@

?>




<?php
require_once 'layouts/left-sidebar.php';
?>
<div class="col-md-8 right">

    <div class="container">
        <form method="post" action="log_in.php">
            <!-- Form Name -->
            <h2 class="m_top">Log In</h2>

            <!-- Email input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="E-mail">E-mail:</label>
                <div class="col-md-6">
                    <input name="sign_email" class="form-control input-md" id="E-mail" type="text" placeholder="E-mail">

                </div>
            </div>


            <!-- Password input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="passwordinput">Last Name:</label>
                <div class="col-md-6">
                    <input name="sign_password" class="form-control input-md" id="passwordinput" type="password"
                           placeholder="Last Name">

                </div>
            </div>


            <div class="form-group">
                <label class="col-md-4 control-label" for="checkbox">Remember me</label>
                <div class="col-md-6">
                    <input name="checkbox" class=" input-md" id="checkbox" type="checkbox">
                </div>
            </div>


            <!-- Button -->
            <div class="form-group">
                <div class="col-md-6">
                    <button name="singlebutton" class="btn btn-primary login_bottom_margin" id="singlebutton">Log in</button>
                </div>
            </div>


        </form>
    </div>
</div>

</div>
</div>
<?php  require_once 'layouts/footer.php'; ?>




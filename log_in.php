
<?php
require_once 'components/db_functions.php';

require_once 'layouts/header.php';
?>


<?php
require_once 'layouts/left-sidebar.php';
?>
<div class="col-md-8 right">

    <div class="container">
        <form method="post" action="valid/valid_login.php">
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




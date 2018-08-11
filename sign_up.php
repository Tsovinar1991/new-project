<?php
require_once 'cookies_sessions/session_on.php';
if(check_session()){
    header("Location:index.php");
}
//print_r($_POST);

require_once "components/db_functions.php";
require_once 'valid/admin_validate.php';
$f_name = $_POST['name'];
$l_name = $_POST['l_name'];
$email = $_POST['e_mail'];
$password = $_POST['password'];
$conf_password = $_POST['conf_password'];
$registr_date = date('Y-m-d');
$warning = "";
$message = "";
$not_equal ="";
$email_error = "";
$repeat_error = "";
$errors = 0;

///avelacnel erkrneri table, registrationi, mej, login@ krkin veranayel ereorner@///\
/// ///idn stananq sessiayi mej qcenq u avtomad  redirect exni myproifile ej mtni
/// anun aganun, mail u erkrii anun@ grvi nkar ikonkayov

///countriner@ avelacnel,  forin keyov miacnel


if (isset($_POST["submit"])) {
    if (!required($f_name) || !required($l_name) || !required($email) || !required($password) || !required($conf_password)) {
        $warning = "Please fill all required fields.";
        $errors++;

    }

    if (!is_text($f_name) || !is_text($l_name)) {
        $message = "First Name and Last Name must contain only letters.";
        $errors++;
    }


    if (!is_equal($password, $conf_password)) {
        $not_equal = "Password and Confirm password must be equal.";
        $errors++;
    }

    if (!empty($email)) {
        if (!valid_email($email)) {
            $email_error = "You must enter valid email address.";
            $errors++;
        }
    }

    $query = $conn->query("Select * from registr_s where email = '$email' ");
    $count = $query->rowcount();
    $row = $query->fetch();
    if($count>0){
        $repeat_error = "Your email address is already in use.";
        $errors++;
    }

    if ($errors === 0) {


        try {
            echo "Connected successfully" . "<br>";


            $sql = "Insert into  registr_s(f_name, l_name, email, password, registr_date) values('$f_name', '$l_name', '$email', sha1('$password'), '$registr_date' )";
            // $sql = "Insert into  registr_s(f_name, l_name, email, password, registr_date) values('nkfjkw', 'jwndkw', 'nkfnwkf', 'whfiiw', $registr_date)";
            if ($conn->exec($sql)) {
                echo "New record created successfully";
            } else {
                echo "Error: ";
            }
            header("Location: log_in.php"); /* Redirect browser */
            exit();

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    
}

?>

<?php
require_once 'layouts/header.php';
?>


<?php
require_once 'layouts/left-sidebar.php';
?>
<div class="col-md-8 right">

    <div class="container">
        <form method="post" action="sign_up.php">
            <!-- Form Name -->
            <h2 class="m_top">Registration Page</h2>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Name:</label>
                <div class="col-md-6">
                    <input value="<?= trim($f_name)?>" name="name" class="form-control input-md" id="textinput" type="text" placeholder="Name">

                </div>
            </div>

            <!-- l_name input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="passwordinput">Last Name:</label>
                <div class="col-md-6">
                    <input  value="<?= trim($l_name)?>" name="l_name" class="form-control input-md" id="passwordinput" type="text"
                           placeholder="Last Name">

                </div>
            </div>

            <!-- Email input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="E-mail">E-mail:</label>
                <div class="col-md-6">
                    <input value="<?= trim($email)?>" name="e_mail" class="form-control input-md" id="E-mail" type="text" placeholder="E-mail">

                </div>
            </div>

            <!-- Password input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="passwordinput">Password:</label>
                <div class="col-md-6">
                    <input  value="<?= trim($password)?>" name="password" class="form-control input-md" id="passwordinput" type="password"
                           placeholder="Password">

                </div>
            </div>

            <!-- Confpassword input -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="confpassword">Confirm Password</label>
                <div class="col-md-6">
                    <input value="<?= trim($conf_password)?>" name="conf_password" class="form-control input-md" id="confpassword" type="password"
                           placeholder="Confirm Password">
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <div class="col-md-6">
                    <button name="submit" class="btn btn-primary" id="singlebutton" type="submit">Registration</button>
                </div>
            </div>

        </form>
        <div class="warning">
            <?= $warning . "<br>" ?>
            <?= $message . "<br>" ?>
            <?= $not_equal . "<br>" ?>
            <?= $email_error . "<br>" ?>
            <?=$repeat_error?>

        </div>
    </div>
</div>

</div>
</div>
<?php require_once 'layouts/footer.php'; ?>



<?php
require_once 'components/db_functions.php';
require_once 'layouts/header.php';
require_once 'cookies_sessions/session_on.php';
if (!check_session()) {
    header("Location:index.php");
}


//var_dump($_SESSION['name']);
$id = $_SESSION['id'];

//$sql = "select r.*, c.id as country_id, c.title as country_name from registr_s as r left join countries as c on r.country_id = c.id where r.id = '$id'";
//$stmt = $conn->query($sql);
//$data = $stmt->fetch(PDO::FETCH_ASSOC);

//var_dump($data);

$con = Database::instance();
$con->select("registr_s", array("id"=>$id));
$data_welcome = $con->result();



?>


<?php
require_once 'layouts/left-sidebar.php';
?>
    <div class="col-md-9 right">
        <div class="container">
            <div class="col-md-6">

                <?php foreach($data_welcome as $info):?>
                <h2 class="about_info">Welcome <?= $info->f_name; ?></h2>
                <img src="uploads/profiles/<?= $info->profile_path; ?>" class="profile_img_size">
                <ul>
                    <li>Last Name: <?= $info->l_name; ?></li>
                    <li>Email address: <?= $info->email; ?> </li>
                    <li>Country:</li>
                </ul>
                <?php echo "Today is " . date("Y/m/d") . "<br>"; ?>
                <?php  endforeach;?>
            </div>
            <div class="cat_nav "><a href="admin.php" class="admin"><?= $f_name ?> please just enter here if you want to
                    add news.</a></div>
        </div>
    </div>
    </div>
    </div>
<?php require_once 'layouts/footer.php'; ?>
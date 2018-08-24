<?php
require_once 'components/db_functions.php';
$con = Database::instance();
require_once 'layouts/header.php';
require_once 'cookies_sessions/session_on.php';
require_once 'layouts/left-sidebar.php';

?>

<div class="col-md-9 right">
    <div class="news_list col-md-12 ">
        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $query =$con->select("news", array("id"=>$id));
            $data =  $query->result();

            //var_dump($data);
        } else {
            header("Location: index.php");
        }
        ?>
        <?php if (!empty($data)){ ?>
            <?php foreach ($data as $article): ?>
        <h2 class="title"><?php echo $article->title; ?></h2>
        <div class="image_container"><img src="uploads/<?php echo $article->image_path; ?>"</div>
        <div class="description"><?php echo $article->description; ?></div>
        <div><?php echo $article->content; ?></div>
        <div class="news_date">Created : <?php echo $article->date_of_creating; ?>  </div>
            <?php endforeach;?>
        <?php } ?>
    </div>


</div>
</div>
</div>

<?php require_once 'layouts/footer.php'; ?>



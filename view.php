<?php
require_once 'components/db_functions.php';
require_once 'layouts/header.php';
?>



            <?php
            require_once 'layouts/left-sidebar.php';
            ?>



        <div class="col-md-8 right">
            <div class="news_list ">
            <?php
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $stmt = $conn->query("SELECT * FROM news where id=".$id);
                $data = $stmt->fetch(PDO::FETCH_ASSOC);


            }

            ?>
            <?php if(!empty($data)){?>

                    <div class="news_list">
                        <h2 class="title"><?php echo $data['title'];?></h2>
                        <div class="image_container"><img src="uploads/<?php echo $data['image_path'];?>"</div>
                        <div class = "description"><?php echo $data['description'];?></div>
                        <div><?php echo $data['content'];?></div>
                        <div>Created : <?php echo $data['date_of_creating'];?></div>
                    </div>

            <?php } ?>
        </div>
    </div>
</div>

<?php  require_once 'layouts/footer.php'; ?>



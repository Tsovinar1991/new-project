

<?php
require_once 'components/db_functions.php';
require_once 'layouts/header.php';
?>


<?php
require_once 'layouts/left-sidebar.php';
?>


<?php

$con = Database::instance();
$query = $con->select("news", array(), false, false, "", "*");
$data_index = $query ->result();
?>

<div class="col-md-9 right">
    <div class="news_list ">
        <?php if (!empty($data_index)): ?>
            <div class="row m-0">
                <?php foreach ($data_index as $item): ?>
                    <div class="col-sm-6">
                        <h4 class="title"><a href="view.php?id=<?php echo $item->id; ?>"><?php echo $item->title; ?></a>
                        </h4>
<!--                        --><?php //var_dump($item->id);?>
                        <div class="image_container">
                            <img src="uploads/<?php echo $item->image_path; ?>">
                        </div>
                        <div class="description"><?php echo $item->description; ?></div>

                        <?php
                        //$stmt = $conn->query("SELECT * FROM categories where id =".$item['category_id']);
                        //   $category = $stmt->fetch(PDO::FETCH_ASSOC);
                        ?>
                        <div class="category">Category: <?php
//                            echo $item['category_name'];
//                            //echo $category['title'];
//                            ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
</div>
</div>


<?php require_once 'layouts/footer.php'; ?>




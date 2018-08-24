<?php


require_once 'components/db_functions.php';
$con = Database::instance();
$con->select("categories", array(), false, false, "", "*");
$data = $con->result();
//var_dump($data);
//die();


?>
<div class="container">
    <div class="row">
        <div class="col-md-3 left">
            <h3 class="cat">Categories</h3>
            <ul class="category_nav" id="sortable">
                <?php foreach ($data as $value): ?>
                    <li><a href="category.php?id=<?= $value->id
                        ?>"><?= $value->title ?></a></li>
                <?php endforeach ?>

            </ul>
        </div>

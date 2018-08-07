<?php require_once "components/db_functions.php"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        * {
            padding: 0;
            margin: 0;
            outline: none;
        }

        header {
            margin-left: 15px;
        }

        header h2 {
            text-transform: uppercase;
        }

        form {
            margin: 15px 0 0 10px;
        }

        p {

        }

        p label {
            font-size: 18px;
        }

        #description {
            max-height: 200px;
            height: 200px;

        }

        #content {
            height: 300px;
            max-height: 300px;
            overflow: scroll;
        }

    </style>

</head>
<body>
<div class="container">
    <form action="admin_conn.php" method="post" enctype="multipart/form-data">
        <h3><a href = welcome.php>For going back, just click here.</a></h3>
        <header><h2>Create News</h2></header>
        <div class="row">
            <div class="col-md-4">
                <div class="col-md-12">
                    <p><label for="title">Title</label></p>
                    <p><input type="text" id="title" class="form-control" placeholder="Title" name="title"></p>
                </div>
                <div class="col-md-12">
                    <p><label for="description">Description</label></p>
                    <p><textarea id="description" class="form-control" placeholder="Description" name="description"></textarea></p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="col-md-12">
                    <p><label for="content">Article</label></p>
                    <p><textarea id="content" class="form-control" placeholder="Content ... " name="article"></textarea>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <p><label for="image"></label></p>
            <p><input type="file" id="image" class="form-control-file" value="Choose image" name="image"></p>
            <select class="form-control" name="select" >
                <?php
                $categories = ["", "Art", "Sport", "Government", "Environmental", "Politics", "Weather", "Universe"];
                foreach( $categories as $key => $val){
                    if ($key < 1) continue;

                    echo '<option value="'.$key.'">'.$val.'</option>';

                }
                echo '</select>';


                ?>

            </select>
        </div>




        <div class="col-md-4">
            <p>
                <button type="submit" id="button" class="btn btn-primary btn-md" value="Save" name="save">Save</button>
            </p>
        </div>
    </form>
</div>


<script src="js/jquery.js"></script>
<!--<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>-->
<script src="js/script.js"></script>
<script src="js/admin_validation.js"></script>

</body>
</html>

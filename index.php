<?php
include "logic.php";
?>

<!DOCTYPE HTML>

<?php 
$conn = mysqli_connect($servername, $username, $password, $dbname);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles2.css">

    <title>Blog of the dammned</title>
</head>
<body>

    <div class="container">
        <?php if(isset($_REQUEST['info']) == "added"){?>
        <div class="added">The post has been added</div>
        <?php } ?>

    </div>


    <div class="container">
        <div class="button2">
            <a href="create.php">
                <button name="create-post">Create post</button>
            </a>
        </div>
    </div>

    

    <div class="row">
        <?php foreach($query as $q){  ?>
            <span class="col">
                <div class="card">
                    <span class="title2"><?php echo $q['title'];?></span></br>
                    <span class="blog_content"><?php echo $q['content'];?></span><br>
                    <div>
                        <a href="view.php?id=<?php echo $q['id'];?>" class="readmore">Read more</a>
                    </div>
                </div>
            </span>
        <?php } ?>
    </div>

    

</body>



</html>

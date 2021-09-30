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
        <?php foreach($query as $q) {?>
            <div class="view-title">
                <span>
                    <h1><?php echo $q['title'];?></h1><br>
                </span>
            </div>

            <div class="content">
                <span>
                    <p><?php echo $q['content'];?></p>
                </span>
            </div>

        <?php } ?>

        <a href="edit.php?id=<?php echo $_REQUEST['id'];?>" class="edit">
            <button>Edit</button>
        </a>
        <button class="delete" name="delete">Delete</button>

    </div>

    

  

    

</body>



</html>
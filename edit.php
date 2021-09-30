<?php
include "logic.php";
$conn = mysqli_connect($servername, $username, $password, $dbname);
?>


<!DOCTYPE HTML>

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
            <form method="GET">
                <input class="title" type="text" name="title" value="<?php echo $_REQUEST['title']?>"></br>
                <textarea class="area" name="edited_content" ></textarea></br>
                <button class="button2" name="edited_post">Update post</button></br>


            </form>
        <?php } ?>
    </div>


   

</body>



</html>
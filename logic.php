<?php



$servername ="localhost";
$username ="root";
$password="";
$dbname="blog_database";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Connection failed" . mysqli_connect_error());
}

$sql2 = "SELECT * FROM blog";
$query = mysqli_query($conn, $sql2);
$row = mysqli_fetch_row($query);



if(isset($_REQUEST["new_post"]) && (!empty($_REQUEST["title"])) && (!empty($_REQUEST["content"]))){  //myscli procedural

    $title = $_REQUEST["title"];
    $content = $_REQUEST["content"];
    $sql = "INSERT INTO blog(title, content) VALUES ('$title', '$content')";


    mysqli_query($conn, $sql);

    echo $sql;

    Header("Location: index.php?info=added");
    exit();
}

if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM blog WHERE id =$id";
    $query = mysqli_query($conn, $sql);
}



?>
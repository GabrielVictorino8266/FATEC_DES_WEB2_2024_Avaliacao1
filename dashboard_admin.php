<?php

session_start();

if(!isset($_SESSION['user_id']) || $_SESSION['user_id'] != 'coordenacao'){
    echo "User not loged or not authorized";
    header('location: index.php');
    exit;
}

function view_dsm_occurriences(){
    if(file_exists("DSM.txt")){
        $content = file_get_contents("DSM.txt");
        echo nl2br($content);
    }
}
function view_ge_occurriences(){
        if(file_exists("GE.txt")){
            $content = file_get_contents("GE.txt");
            echo nl2br($content);
        }
}
function view_all_occurriences(){
    if(file_exists("GE.txt") && file_exists("DSM.txt")){
        $content_dsm = file_get_contents("GE.txt");
        $content_ge = file_get_contents("GE.txt");
        echo nl2br($content_ge . $content_dsm);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
</head>
<body>
    
    <a href="logout.php">Log Out</a>

    <h1>dashboard_admin</h1>
    <form action="" method="post">
        <button type="submit" name="dsm_occurriences">Show just DSM occuriences</button>
        <button type="submit" name="ge_occurriences">Show just GE occuriences</button>
        <button type="submit" name="all_occurriences">Show just ALL occuriences</button>
    </form>


    <?php
        if(isset($_POST['dsm_occurriences'])){
            view_dsm_occurriences();
        }
        if(isset($_POST['ge_occurriences'])){
            view_ge_occurriences();
        }
        if(isset($_POST['all_occurriences'])){
            view_all_occurriences();
        }
    ?>

</body>
</html>
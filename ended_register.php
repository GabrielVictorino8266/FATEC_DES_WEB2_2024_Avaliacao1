<?php
session_start();

if(!isset($_SESSION['user_id']) || $_SESSION['user_id'] != "coordenacao"){
    header('location: index.php');
    exit;
}

if(isset($_POST['register-request'])){
    if(isset($_POST['laboratory']) && $_POST['date'] && $_POST['requesting'] && $_POST['course']){
        //saving data content
        if($_POST['course'] == 'DSM'){
            $file = "DSM.txt";
            $content = "\n" . $_POST['laboratory'] . " | " . $_POST['date'] . " | " . $_POST['requesting'];
            file_put_contents($file, $content, FILE_APPEND);
        }
        if($_POST['course'] == 'GE'){
            $file = "GE.txt";
            $content = "\n" . $_POST['laboratory'] . " | " . $_POST['date'] . " | " . $_POST['requesting'];
            file_put_contents($file, $content, FILE_APPEND);        }
    }
}else{
    echo "Register not finished!";
    header('location: register.php');
    exit;
}
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ended Register</title>
</head>
<body>
    <h1>Register finished!</h1>
    <a href="dashboard_admin.php">Go back to Dashbord</a>
</body>
</html>
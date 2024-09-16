<?php

session_start();

echo $_SESSION['user_id'];

if(!isset($_SESSION['user_id']) || $_SESSION['user_id'] != 'coordenacao'){
    echo "User not loged or not authorized";
    header('location: index.php');
    exit;
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
    <h1>dashboard_admin</h1>
</body>
</html>
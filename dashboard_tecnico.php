<?php
session_start();

if(!isset($_SESSION['user_id']) || $_SESSION['user_id'] != 'tecnico'){
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
    <title>Dashboard Tecnico</title>
</head>
<body>
    <h1>dashboard_tecnico</h1>
</body>
</html>
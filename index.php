<?php
session_set_cookie_params(['httponly' => true]);

session_start();

if(isset($_SESSION['user_id']) && isset($_SESSION['user_type'])){
    if($_SESSION['user_id'] == 'admin'){
        header('location: dashboard_admin.php');
    }
    if($_SESSION['user_id'] == 'tecnico'){
        header('location: dashboard_tecnico.php');
    }
    exit;
}

if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['register'])){
        $username = $_POST['username']; 
        $password = $_POST['password'];

        $users = [
            'coordenacao' => 'coordenacao',
            'tecnico' => 'tecnico'
        ];
    }

    if(isset($users[$username]) && isset($users[$password])){
        $_SESSION['user_id'] = $username;
        if($_SESSION['user_id'] == 'coordenacao'){
            header('location: dashboard_admin.php');
            exit;
        }
        else if($_SESSION['user_id'] == 'tecnico'){
            header('location: dashboard_tecnico.php');
            exit;
        }
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h1>Login no Sistema</h1>

    <form action="" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" id="username"><br><br>
        
        <label for="password">Password: </label>
        <input type="password" name="password" id="password"><br><br>

        <button type="submit" name="register">Login</button>

    </form>
</body>
</html>
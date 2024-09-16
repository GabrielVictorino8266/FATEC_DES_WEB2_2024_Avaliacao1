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
    <title>Register Requests Form </title>
</head>
<body>
    <h1>Register Request Form</h1>

    <form action="dashboard_admin.php" method="POST">
        <label for="laboratory">Laboratory:</label><br>
        <select name="laboratory" id="laboratory">
            <option value="default-lab" selected>Choose a laboratory</option>
            <option value="laboratory1">Laboratory 1</option>
            <option value="laboratory2">Laboratory 2</option>
            <option value="laboratory3">Laboratory 3</option>
        </select><br><br>

        <label for="course">Choose the maximum date:</label><br>
        <input type="date" name="date" id="date"><br><br>

        <label for="requesting">User Request</label><br>
        <input type="text" name="requesting" id="requesting"><br><br>
        
        <label for="course">Choosed Course:</label><br>
        <select name="course" id="course">
            <option value="default-course">Choose a course</option>
            <option value="DSM">DSM</option>
            <option value="GE">GE</option>
        </select><br><br>

        <button type="submit" name="register-request">Register Request</button>
    </form>
</body>
</html>
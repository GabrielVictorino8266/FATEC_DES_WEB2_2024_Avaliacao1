<?php 
function view_all_occurriences(){
    if(file_exists("GE.txt") && file_exists("DSM.txt")){
        $content_dsm = file_get_contents("DSM.txt");
        $content_ge = file_get_contents("GE.txt");
        echo nl2br(htmlspecialchars($content_ge));
        echo "<br>";
        echo nl2br(htmlspecialchars($content_dsm));
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Requests</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar">
        <p class="project-name">Request Fatec System</p>
        <a href="index.php">Go back to index</a>
    </nav>
    <h1 id="non-logged-users">All Requests for non logged Users</h1>
    <div id="all_requests">
        <form action="" method="post">
            <button class="all_occurriences" type="submit" name="all_occurriences">Show just ALL occuriences</button>
        </form>
    </div>
    <div class="all_occurrences_content">
        <?php
            if(isset($_POST['all_occurriences'])){
                view_all_occurriences();
            }
        ?>
    </div>
</body>
</html>
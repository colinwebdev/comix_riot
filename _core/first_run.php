<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_admin/css/style.css">
    <title>Comix Riot || Setup</title>
</head>
<body>
    
<?php

/* =============================================== 
                VARIABLES
   =============================================== */

$db;
$messages = [];
$timezone;
$error_bucket = [];


/* =============================================== 
                SET UP
   =============================================== */
require_once('functions.php');

function firstRun() {
    $stage = isset($_POST['stage']) ? $_POST['stage'] : 'Start';

    switch($stage) {
        case 'Start':
            welcomeScreen();
            break;
        case 'setDB':
            setupDB();
            break;
        case 'createUser':
            createUser();
            break;
        case 'settings':
            basicSettings();
            break;
        case 'final':
            finalize();
            break;
        default:
            welcomeScreen();
            break;
    }

}

/* =============================================== 
                STAGES
   =============================================== */

function welcomeScreen() {
    echo "<main class='firstRun'>";

    echo "<h1>Start</h1>";
    echo "<div><p>Basic instructions</p>";
    echo "<p>What info is needed</p>";
    echo "<p>How to get help, link to docs and forum</p>";
    echo "<form action='first_run.php' method='POST'>
    <input type='hidden' value='setDB' id='stage' name='stage'>
    <input type='submit' value='Get Started'>
    </form>";
    echo "</div>";
    echo "</main>";

    // Test if directories can be created, modified, deleted. Do not continue until user fixes
}

function setupDB() {
    echo "<main class='firstRun'>";

    echo "<h1>Setup Database</h1>";
    echo "<div>";
    echo "<form action='first_run.php' method='POST'>
    <p>Host<br>db name<br>user<br>pass</br></p>
    <input type='hidden' value='createUser' id='stage' name='stage'>
    <input type='submit' value='Submit'>
    </form>
    <p>Instructions for how to get this info and exactly what's needed.</p>";
    echo "</div>";
    echo "</main>";

    // Check if dbConnect exists, if not create file. If it does, ask user if okay to overwrite. 
    // Create DBs and generate tables
}

function createUser() {
    echo "<main class='firstRun'>";

    echo "<h1>Create Admin</h1>";
    echo "<div><p>Explain what this user will be and more can be created later</p>";
    echo "<form action='first_run.php' method='POST'>
    <input type='hidden' value='settings' id='stage' name='stage'>
    <input type='submit' value='Submit'>
    </form>";
    echo "</div>";
    echo "</main>";
}

function basicSettings() {
    echo "<main class='firstRun'>";

    echo "<h1>Basic Settings</h1>";
    echo "<div><p>Add in settings like comic title, timezone, etc</p>";
    echo "<form action='first_run.php' method='POST'>
    <input type='hidden' value='final' id='stage' name='stage'>
    <input type='submit' value='Submit'>
    </form>";
    echo "</div>";
    echo "</main>";
}

function finalize() {
    header('location:first_run.php');
    // TODO: direct to panel if everything successful
}




firstRun();
?>

<!-- <form>
    <input type='hidden' value=''>
    <input type='submit' value=''>
</form> -->

</body>
</html>
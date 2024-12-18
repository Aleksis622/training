

<?php 

require "Database.php";
require_once "style_children.css";

$config = require("config.php");

$db = new Database($config["database"]);

$children = $db->query('SELECT * FROM children')-> fetchall();

echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Christmas Children List</title>
    <link rel='stylesheet' href='style_children.css'>
</head>
<body>
    <h1>🎄 Bērnu saraksts 🎅</h1>
    <ul>";

foreach($children as $child) {
    echo "<li>" . htmlspecialchars($child['firstname']) . " " . htmlspecialchars($child['middlename']) . " " . htmlspecialchars($child['surname']) . " (Vecums: " . htmlspecialchars($child['age']) . ")</li>";
}

echo "</ul>
    <footer>Wishing you a joyful holiday season! ⛄</footer>
</body>
</html>";

?>









?>

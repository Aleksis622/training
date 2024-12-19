

<?php 

require "Database.php";


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
<style>
body {
    background: url('https://images.pexels.com/photos/695971/pexels-photo-695971.jpeg?cs=srgb&dl=pexels-ifreestock-695971.jpg&fm=jpg') no-repeat center center fixed;
    background-size: cover;
    font-family: 'Georgia', serif;
    color: #fff;
    text-align: center;
}

h1 {
    color: #e63946;
    font-size: 3em;
    margin: 20px;
    text-shadow: 2px 2px 4px #000;
}

ul {
    list-style: none;
    padding: 0;
}

li {
    font-size: 1.5em;
    margin: 10px 0;
    color: #f1faee;
    text-shadow: 1px 1px 2px #333;
    display: flex;
    align-items: center;
    justify-content: center;
}

li::before {
    content: '🎁'; /* Small gift emoji */
    margin-right: 10px;
    font-size: 1.2em;
}

footer {
    margin-top: 30px;
    font-size: 1.2em;
    color: #a8dadc;
}

</style>

</body>
</html>";

?>











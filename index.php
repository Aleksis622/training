<?php

require "functions.php";
require "Database.php";

$config = require("config.php");

// 1. Izveidot datu bāzi ✅
// 2. Izveidot savienojumu ar PHP ✅
// 3. Izvadīt datus uz HTML ✅


$db = new Database($config["database"]);
$posts = $db->query("SELECT * FROM posts")->fetchAll();


echo "<ul>";
foreach($posts as $post) {
    echo "<li>" . $post["content"] . "</li>";
}
echo "</ul>";


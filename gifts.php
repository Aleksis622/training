




<?php 
require "Database.php";


$config = require("config.php");

$db = new Database($config["database"]);

$gifts = $db->query('SELECT * FROM gifts')->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Christmas Gifts</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('https://images.unsplash.com/photo-1511268011861-691ed210aae8?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fGNocmlzdG1hcyUyMGJhY2tncm91bmR8ZW58MHx8MHx8fDA%3D') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
            margin: 0;
            padding: 0;
        }
        header {
            text-align: center;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7);
        }
        header h1 {
            font-size: 3rem;
            color: #ff4444;
        }
        ul {
            list-style: none;
            padding: 0;
            max-width: 800px;
            margin: 20px auto;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        ul li {
            padding: 15px;
            margin: 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            display: flex;
            justify-content: space-between;
        }
        ul li:last-child {
            border-bottom: none;
        }
        ul li span {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
        <h1>🎄 Dāvanu saraksts 🎁</h1>
      
    </header>
    <ul>
        <?php foreach($gifts as $gift): ?>
            <li>
                <span><?php echo htmlspecialchars($gift['name']); ?></span>
                <span>Pieejamais daudzums: <?php echo htmlspecialchars($gift['count_available']); ?></span>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

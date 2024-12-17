<?php 



class Database {
    public $pdo;

    // Konstruktors - izpildās vienu reizi, kad objekts uztaistīts
    public function __construct($config) {
        // Data Source Name
        $dsn = "mysql:" . http_build_query($config, "", ";");
        // PHP Data Object
        $this->pdo = new PDO($dsn);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    public function query($sql) {
        // 1. Sagatavot vaicājumu
        $statement = $this->pdo->prepare($sql);
        // 2. Izpildīt vaicājumu
        $statement->execute();
        return $statement;
    }
}

?>
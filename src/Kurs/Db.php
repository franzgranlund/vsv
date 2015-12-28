<?php

namespace Kurs;

class Db {

    private static $CS = "mysql:host=localhost;dbname=vsv;charset=utf8";
    private static $U = "";
    private static $P = "";

    public static function usersByName($name)
    {
        $connection = new \PDO(self::$CS, self::$U, self::$P);
        $statement = $connection->prepare('SELECT * FROM users WHERE name = :name');
        $statement->execute([
            ':name' => $name
        ]);
        return $statement->fetchAll(\PDO::FETCH_CLASS, "Kurs\\User");
    }

    public static function fetchUsers()
    {
        $connection = new \PDO(self::$CS, self::$U, self::$P);
        $statement = $connection->query('SELECT * FROM users');
        return $statement->fetchAll(\PDO::FETCH_CLASS, "Kurs\\User");
    }
}

?>
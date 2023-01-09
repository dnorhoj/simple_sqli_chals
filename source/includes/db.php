<?php

class DB {
    private static $conn_string = "mysql:host=db;dbname=sqlchal;charset=utf8";
    private static $users = [
        "root" => "y5WL79651SeP9jxZDesVOAmZaEuEl6bI",
        "chal1" => "MVoKcX8ZivUO3VUh330GqwlemIZSpHVl",
        "chal2" => "0oVZRRyGePttOtTTWJ27ixdZAD3KJmAM"
    ];

    static function conn(string $username): PDO {
        if (!key_exists($username, self::$users)) throw new Exception("Username not found!");

        return new PDO(self::$conn_string, $username, self::$users[$username]);
    }
}
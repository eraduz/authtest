<?php
class Connection
{
    private static $server = "mysql:host=localhost;dbname=userauth";
    private static $user = "root";
    private static $password = "";
    static $conn;

    public static function openConnection()
    {
        try {
            self::$conn = new PDO(self::$server,self::$user, self::$password);
            return self::$conn;
        } catch (PDOException $e) {
            echo "There is some problem in connection: " . $e->getMessage();
        }
    }
}
<?php
class Database {
    private static $dsn = 'mysql:host=sql.njit.edu;dbname=wt49';
    private static $username = 'wt49';
    private static $password = 'CImYkE0rQ';
    private static $db;

    private function __construct() {}

    public static function getDB () {
        if (!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn,
                                     self::$username,
                                     self::$password);
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                include('../errors/database_error.php');
                exit();
            }
        }
        return self::$db;
    }
}
?>

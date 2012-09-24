<?php


class DB {

    private static $_connection;

    /**
     * Get Connection instance
     * @return Connection
     */
    public static function getConnection() {

        if (empty(self::$_connection)) {

            require_once(__DIR__ . '/../../config/defualt.php');

            self::$_connection = new Connection();
            self::$_connection->connect($config['dtb']);

        }

        return self::$_connection;

    }

}
<?php

namespace models;

use Exception;
use PDO;

/**
 * Class Database
 * Database connection
 */
class DatabaseClass
{
    /**
     * @var string host database
     */
    const DB_HOST = 'mysql:host=localhost;dbname=blogjeanforteroch;charset=utf8';


    /**
     * @var string username for database connection
     */
    const DB_USER = 'root';


    /**
     * @var string password for database connection
     */
    const DB_PASS = '';


    /**
     * Database connection method
     */
    public function getConnection()
    {
        /*
         * Attempting to connect to the database
         */
        try {
            $connection = new PDO(self::DB_HOST, self::DB_USER, self::DB_PASS);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;
        }

        /*
         * Error if connection fails
         */
        catch (Exception $e) {
            die('Erreur de connection :'.$e->getMessage());
        }
    }//end getConnection()
}//end class

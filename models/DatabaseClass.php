<?php

class Database
{
    const DB_HOST = 'mysql:host=localhost;dbname=blogjeanforteroch;charset=utf8';
    const DB_USER = 'root';
    const DB_PASS = '';

    //Méthode de connexion à la base de données
    public function getConnection()
    {
        
        try{
            $connection = new PDO(Database::DB_HOST, Database::DB_USER, Database::DB_PASS );
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;
        }
        catch(Exception $e)
        {
            die ('Erreur de connection :'.$e->getMessage());
        }
    }
}

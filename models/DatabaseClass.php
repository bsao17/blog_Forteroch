<?php

class Database
{
    const DB_HOST = 'mysql:host=localhost;dbname=blogjeanforteroch;charset=utf8';
    const DB_USER = 'root';
    const DB_PASS = '';

    //Méthode de connexion à notre base de données
    public function getConnection()
    {
        //Tentative de connexion à la base de données
        try{
            $connection = new PDO(Database::DB_HOST, Database::DB_USER, Database::DB_PASS );
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return 'Connexion OK';
        }
        //On lève une erreur si la connexion échoue
        catch(Exception $e)
        {
            die ('Erreur de connection :'.$e->getMessage());
        }
    }
}

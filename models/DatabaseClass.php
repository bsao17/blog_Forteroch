<?php

class Database
{
    //Méthode de connexion à notre base de données
    public function getConnection()
    {
        //Tentative de connexion à la base de données
        try{
            $connection = new PDO('mysql:host=localhost;dbname=blogjeanforteroch;charset=utf8', 'root', '');
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        //On lève une erreur si la connexion échoue
        catch(Exception $e)
        {
            die ('Erreur de connection :'.$e->getMessage());
        }
    }
}

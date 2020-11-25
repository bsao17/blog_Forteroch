<?php

namespace models;

use Exception;
use models\DatabaseClass;
use PDO;

/**
 * class ManagerBillets
 */
class ManagerBillets
{

    /**
     * @var DatabaseClass
     */
    private $db;

    /**
     * @var PDO
     */
    private PDO $connection;


    /**
     * constructor method for database connection
     */
    public function __construct()
    {
        $this->db         = new DatabaseClass();
        $this->connection = $this->db->getConnection();
    }//end __construct()


    /**
     * Display Billets
     *
     * @return array $result
     */
    public function getBillet()
    {
        try {
            $request = $this->connection->query('SELECT * FROM billets');
            $request->execute();
            $result = $request->fetchAll();
            return $result;
        } catch (Exception $e) {
            echo 'Error : '.$e->getMessage();
            die;
        }
    }//end getBillet()


    /**
     * display one billet with ID
     *
     * @param  integer $ID
     * @return array $result
     */
    public function getBilletAlone($ID)
    {
        try {
            /*
                @var DatabaseClass $request
            */
            $request = $this->connection->prepare('SELECT * FROM billets WHERE ID = :ID');
            $request->bindParam(':ID', $ID, PDO::PARAM_STR);
            $request->execute();
            return $request->fetchAll();
        } catch (Exception $e) {
            echo 'Error : '.$e->getMessage();
            die;
        }
    }//end getBilletAlone()


    /**
     * Insert new billet in database
     *
     * @param  string $title
     * @param  string $content
     * @return boolean $result
     */
    public function createBillet($title, $content)
    {
        try {
            /*
                @var DatabaseClass $sql
            */
            $sql = 'INSERT INTO billets(title, content) VALUES (:title, :content) ';
            if ($request = $this->connection->prepare($sql)) {
                $request->bindParam(':title', $title, PDO::PARAM_STR);
                $request->bindParam(':content', $content, PDO::PARAM_STR);
                $result = $request->execute();
                return $result;
            }
        } catch (Exception $e) {
            echo 'Error :'.$e->getMessage();
            die;
        }
    }//end createBillet()


    /**
     * Delete billet
     *
     * @param  integer $ID
     * @return boolean $result
     */
    public function deleteBillet($ID)
    {
        try {
            $sql     = 'DELETE FROM billets WHERE ID = :ID';
            $request = $this->connection->prepare($sql);
            $request->bindParam(':ID', $ID, PDO::PARAM_STR);
            $result = $request->execute();
            return $result;
        } catch (Exception $e) {
            echo 'Error : '.$e->getMessage();
            die;
        }
    }//end deleteBillet()


    /**
     * Insert new billet in database
     *
     * @param  integer $ID
     * @param  string  $titleUpdate
     * @param  string  $commentUpdate
     * @return boolean $result
     */
    public function updateBillet($ID, $titleUpdate, $commentUpdate)
    {
        try {
            $sql     = 'UPDATE billets SET title = :title, content = :content WHERE ID = :ID ';
            $request = $this->connection->prepare($sql);
            $request->bindParam(':title', $titleUpdate, PDO::PARAM_STR);
            $request->bindParam(':content', $commentUpdate, PDO::PARAM_STR);
            $request->bindParam(':ID', $ID, PDO::PARAM_STR);
            $result = $request->execute();
            return $result;
        } catch (Exception $e) {
            echo 'Error : '.$e->getMessage();
            die;
        }
    }//end updateBillet()
}//end class

<?php

function classAutoload()
{
    require_once(__CLASS__ . 'php');
}
spl_autoload_register('classAutoload');
class ManagerBillets
{
    private $db;
    private $connection;

    public function __construct()
    {
        $this->db = new Database();
        $this->connection = $this->db->getConnection();
    }

    //Display Billets
    public function getBillet()
    {
        $request = $this->connection->query("SELECT * FROM billets");
        $request->execute();
        $result = $request->fetchAll();
        return $result;
    }

    // display one billet with ID    
    public function getBilletAlone($ID)
    {
        $request = $this->connection->prepare("SELECT * FROM billets WHERE ID = :ID");
        $request->bindParam(":ID", $ID, PDO::PARAM_STR);
        $request->execute();
        $result = $request->fetchAll();
        return $result;
    }

    //Insert new billet in database
    public function createBillet($title, $content)
    {
        try {
            $sql = "INSERT INTO billets(title, content) VALUES (:title, :content) ";
            if ($req = $this->connection->prepare($sql)) {
                $req->bindParam(":title", $title, PDO::PARAM_STR);
                $req->bindParam(":content", $content, PDO::PARAM_STR);
                $req->execute();
            }
        } catch (Exception $e) {
            echo ("Error :" . $e->getMessage());
            die;
        }
    }

    public function deleteBillet($ID)
    {
        $sql = "DELETE FROM billets WHERE ID = :ID";
        $req = $this->connection->prepare($sql);
        $req->bindParam(":ID", $ID, PDO::PARAM_STR);
        $req->execute();
    }

    public function updateBillet($ID, $titleUpdate, $commentUpdate)
    {
        $sql = "UPDATE billets SET title = :title, content = :content WHERE ID = :ID ";
        $req = $this->connection->prepare($sql);
        $req->bindParam(":title", $titleUpdate, PDO::PARAM_STR);
        $req->bindParam(":content", $commentUpdate, PDO::PARAM_STR);
        $req->bindParam(":ID", $ID, PDO::PARAM_STR);
        $req->execute();
    }
}

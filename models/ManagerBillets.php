<?php

require_once "./models/DatabaseClass.php";

/**
 * class ManagerBillets
 */
class ManagerBillets
{
    /**
     * @var database
     */
    private $db;


    /**
     * @var PDO
     */
    private $connection;


    /**
     * constructor method for database connection
     */
    public function __construct()
    {
        $this->db = new Database();
        $this->connection = $this->db->getConnection();
    }

    /**
     * Display Billets
     * @return array $result
     */
    public function getBillet()
    {
        try {
            $request = $this->connection->query("SELECT * FROM billets");
            $request->execute();
            $result = $request->fetchAll();
            return $result;
        } catch (Exception $e) {
            echo ("Error : " . $e->getMessage());
            die;
        }
    }

    /**
     * display one billet with ID
     * @param int $ID
     * @return array $result
     */
    public function getBilletAlone($ID)
    {
        try {
            $request = $this->connection->prepare("SELECT * FROM billets WHERE ID = :ID");
            $request->bindParam(":ID", $ID, PDO::PARAM_STR);
            $request->execute();
            $result = $request->fetchAll();
            return $result;
        } catch (Exception $e) {
            echo ("Error : " . $e->getMessage());
            die;
        }
    }

    /**
     * Insert new billet in database
     * @param string $title
     * @param string $content
     * @return bool $result
     */
    public function createBillet($title, $content)
    {
        try {
            $sql = "INSERT INTO billets(title, content) VALUES (:title, :content) ";
            if ($request = $this->connection->prepare($sql)) {
                $request->bindParam(":title", $title, PDO::PARAM_STR);
                $request->bindParam(":content", $content, PDO::PARAM_STR);
                $result = $request->execute();
                return $result;
            }
        } catch (Exception $e) {
            echo ("Error :" . $e->getMessage());
            die;
        }
    }

    /**
     * Delete billet
     * @param int $ID
     * @return bool $result
     */
    public function deleteBillet($ID)
    {
        try {
            $sql = "DELETE FROM billets WHERE ID = :ID";
            $request = $this->connection->prepare($sql);
            $request->bindParam(":ID", $ID, PDO::PARAM_STR);
            $result = $request->execute();
            return $result;
        } catch (Exception $e) {
            echo ("Error : " . $e->getMessage());
            die;
        }
    }

    /**
     * Insert new billet in database
     * @param int $ID
     * @param string $titleUpdate
     * @param string $commentUpdate
     * @return bool $result
     */
    public function updateBillet($ID, $titleUpdate, $commentUpdate)
    {
        try {
            $sql = "UPDATE billets SET title = :title, content = :content WHERE ID = :ID ";
            $request = $this->connection->prepare($sql);
            $request->bindParam(":title", $titleUpdate, PDO::PARAM_STR);
            $request->bindParam(":content", $commentUpdate, PDO::PARAM_STR);
            $request->bindParam(":ID", $ID, PDO::PARAM_STR);
            $result = $request->execute();
            return $result;
        } catch (Exception $e) {
            echo ("Error : " . $e->getMessage());
            die;
        }
    }
}

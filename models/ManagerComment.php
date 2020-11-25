<?php

namespace models;

use models\Database;
use PDO;

class ManagerComment
{

    /**
     * @var database
     */
    private Database $db;


    /**
     * @var PDO
     */
    private PDO $connection;


    /**
     * constructor method for database connection
     */
    public function __construct()
    {
        $this->db = new Database();
        $this->connection = $this->db->getConnection();
    }


    /**
     * Create new comment method
     * @param int $billetID
     * @param string $user
     * @param string $comment
     * @return bool
     */
    public function createComment($billetID, $user, $comment)
    {
        try {
            $sql = "INSERT INTO comments(ID_billet, user, contentsDb, dateDb) VALUES ( :ID_billet, :user, :content, NOW())";
            if ($request = $this->connection->prepare($sql)) {
                $request->bindParam(":ID_billet", $billetID, PDO::PARAM_STR);
                $request->bindParam(":user", $user, PDO::PARAM_STR);
                $request->bindParam(":content", $comment, PDO::PARAM_STR);
                $result = $request->execute();
                return $result;
            }
        } catch (Exception $e) {
            die("error SQL" . $e->getMessage());
        }
    }

    /**
     * get comments by billets ID
     * @param int $ID
     * @return array $response
     */
    public function getComments($ID)
    {
        try {
            $sql = "SELECT ID, ID_billet, user, contentsDb, DATE_FORMAT(dateDb, '%d/%m/%Y %Hh%imin%ss') as date FROM comments WHERE ID_billet = :ID";
            $request = $this->connection->prepare($sql);
            $request->bindParam(":ID", $ID, PDO::PARAM_STR);
            $request->execute();
            $response = $request->fetchAll();
            return $response;
        } catch (Exception $e) {
            echo("Error : ".$e->getMessage());
            die;
        }
    }

    /**
     * Delete comments by ID
     * @param int $ID
     * @return bool $result
     */
    public function deleteComment($ID)
    {
        try {
            $sql = "DELETE FROM comments WHERE ID = :ID ";
            $request = $this->connection->prepare($sql);
            $request->bindParam(":ID", $ID, PDO::PARAM_STR);
            $result = $request->execute();
            return $result;
        } catch (Exception $e) {
            echo("Error : ".$e->getMessage());
            die;
        }
    }

    /**
     * Comment report for moderation
     * @param int $ID
     * @return int|bool $request
     */
    public function commentReport($ID)
    {
        try {
            $sql = "UPDATE comments SET notify = 'true' WHERE ID =" . $ID;
            $request = $this->connection->exec($sql);
            return $request;
        } catch (Exception $e) {
            echo("Error : ".$e->getMessage());
            die;
        }
    }

    /**
     * comments report list in admin page
     * @return array $post
     */
    public function getCommentsNotify()
    {
        try {
            $sql = "SELECT * FROM comments WHERE notify = 'true'";
            $request = $this->connection->query($sql);
            $post = $request->fetchAll();
            return $post;
        } catch (Exception $e) {
            echo("Error : ".$e->getMessage());
            die;
        }
    }

    /**
     * comment report confirm in moderation page
     * @param int $ID
     * @return bool $result
     */
    public function confirmComment($ID)
    {
        try {
            $sql = "UPDATE comments SET notify = null WHERE ID = :ID";
            $comment = $this->connection->prepare($sql);
            $comment->bindParam(":ID", $ID, PDO::PARAM_STR);
            $result = $comment->execute();
            return $result;
        } catch (Exception $e) {
            echo("Error : ".$e->getMessage());
            die;
        }
    }
}

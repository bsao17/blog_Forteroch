<?php
function findClass($class)
{
    require($class . ".php");
}

spl_autoload_register("findClass");
class ManagerComment
{

    private $db;
    private $connection;

    public function __construct()
    {
        $this->db = new Database();
        $this->connection = $this->db->getConnection();
    }

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

    // get comments by billets ID
    public function getComments($ID)
    {
        try{
            $sql = "SELECT ID, ID_billet, user, contentsDb, DATE_FORMAT(dateDb, '%d/%m/%Y %Hh%imin%ss') as date FROM comments WHERE ID_billet = :ID";
            $request = $this->connection->prepare($sql);
            $request->bindParam(":ID", $ID, PDO::PARAM_STR);
            $request->execute();
            $response = $request->fetchAll();
            return $response;
        }catch(Exception $e){
            echo("Error : ".$e->getMessage());
            die;
        }
    }

    public function deleteComment($ID)
    {
        try{
            $sql = "DELETE FROM comments WHERE ID = :ID ";
            $request = $this->connection->prepare($sql);
            $request->bindParam(":ID", $ID, PDO::PARAM_STR);
            $result = $request->execute();
            return $result;
        }catch(Exception $e){
            echo("Error : ".$e->getMessage());
            die;
        }
    }

    public function commentReport($ID)
    {
        try{
            $sql = "UPDATE comments SET notify = 'true' WHERE ID =" . $ID;
            $request = $this->connection->exec($sql);
            return $request;
        }catch(Exception $e){
            echo("Error : ".$e->getMessage());
            die;
        }
    }

    public function getCommentsNotify()
    {
        try{
            $sql = "SELECT * FROM comments WHERE notify = 'true'";
            $request = $this->connection->query($sql);
            $post = $request->fetchAll();
            return $post;

        }catch(Exception $e){
            echo("Error : ".$e->getMessage());
            die;
        }
    }

    public function confirmComment($ID)
    {
        try{
            $sql = "UPDATE comments SET notify = null WHERE ID = :ID";
            $comment = $this->connection->prepare($sql);
            $comment->bindParam(":ID", $ID, PDO::PARAM_STR);
            $result = $comment->execute();
            return $result;
        }catch(Exception $e){
            echo("Error : ".$e->getMessage());
            die;
        }
    }
}

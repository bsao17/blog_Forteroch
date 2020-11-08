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

    public function createComment($billetID, $user, $comment){
        try{
            $sql = "INSERT INTO comments(ID_billet, user, contentsDb, dateDb) VALUES ( :ID_billet, :user, :content, NOW())";
            if($req = $this->connection->prepare($sql)){
                $req->bindParam(":ID_billet", $billetID, PDO::PARAM_STR);
                $req->bindParam(":user", $user, PDO::PARAM_STR);
                $req->bindParam(":content", $comment, PDO::PARAM_STR);
                $req->execute();
            }
            
        }catch(Exception $e){
            die("error SQL".$e->getMessage());
        } 
    }

// get comments by billets ID
    public function getComments($ID){
        $sql = "SELECT * FROM comments WHERE ID_billet = :ID";
        $req = $this->connection->prepare($sql);
        $req->bindParam(":ID", $ID, PDO::PARAM_STR);
        $req->execute();
        $response = $req->fetchAll();
        return $response;
    }
    
    public function deleteComment(){
        try{
            $sql = "DELETE FROM comments WHERE ID = :ID ";
            $req = $this->connection->prepare($sql);
        }catch(Exception $e){
            die("error".$e->getMessage());
        }
    }

    public function updateComment()
    {
    }
}

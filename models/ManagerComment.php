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

    public function addComment($billetID, $user, $comment){
        try{
            $sql = "INSERT INTO comments(ID_billet, user, contentsDb) VALUES ( :ID_billet, :user, :content )";
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

    
    public function displayComment(){
        try{
            $sql = "SELECT * FROM comments INNER JOIN comment.ID_billet = billets.ID";
            $req = $this->connection->query($sql);
            $req->execute();
        }catch(Exception $e){
            die("error SQL".$e->getMessage());
        }
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

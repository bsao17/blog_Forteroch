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

    public function addComment($billetID, $userID, $comment)
    {
        $sql = "INSERT INTO comments(ID_billet, ID_user, contentsDb) VALUES( :ID_billet, :ID_user, :content )";
        if($req = $this->connection->prepare($sql)){
            $req->bindParam(":ID_billet", $billetID, PDO::PARAM_STR);
            $req->bindParam(":ID_user", $userID, PDO::PARAM_STR);
            $req->bindParam(":content", $comment, PDO::PARAM_STR);
            $req->execute();
        }else{
            echo "error sql";
        }
        
    }

    
    public function displayComment(){
        $comment = $this->connection->query("SELECT * FROM comments INNER JOIN comment.ID_billet = billets.ID");
        
    }
    
    public function deleteComment()
    {
        
    }

    public function updateComment()
    {
    }
}

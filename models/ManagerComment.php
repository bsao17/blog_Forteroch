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

    public function postComment($billetID, $userID, $contentComment)
    {
        $comment = $this->connection->prepare("INSERT INTO comments(ID_billet, ID_user, contentsDb) VALUES( :ID_billet, :ID_user, :content )");
        $comment->bindParam(":ID_billet", $billetID);
        $comment->bindParam(":ID_user", $userID);
        $comment->bindParam(":content", $contentComment );
        $comment->execute();
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

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

    public function postComment()
    {
        $comment = $this->connection->prepare("INSERT INTO comments(ID_billet, ID_user, contentsDb) VALUES( )");
        $comment->bindParam(":username", $_SESSION['login']);
        $comment->bindParam(":ID_billet", $ID_billet);
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

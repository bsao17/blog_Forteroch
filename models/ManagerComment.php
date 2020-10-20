<?php 
function findClass($class){
    require($class.".php");
}

spl_autoload_register("findClass");
class ManagerComment{

    private $db;
    private $connection;

    public function __construct(){
        $this->db = new Database();
        $this->connection = $this->db->getConnection();
    }

    public function postComment(){
        $comment = $this->connection->prepare("INSERT INTO comments(ID_billet, ID_user, contentsDb) VALUES( :username, :comment)");
        $comment->bindParam(":username", $_SESSION['login']);
        $comment->bindParam(":ID_billet", $_POST['comment']);
        $comment->execute();
    }

    public function deleteComment(){
        
    }

    public function displayComment(){
        $comment = $this->connection->prepare("SELECT contentsDb FROM comments WHERE ID_billet = (:ID_billet)");
    }

    public function updateComment(){

    }
}
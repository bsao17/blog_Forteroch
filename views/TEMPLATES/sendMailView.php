
 
 <?php

try{
    if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['mail']) && isset($_POST['contentMail'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['mail'];
        $contentMail = $_POST['contentMail'];
        $body = "$firstname\n$lastname\n$email\n$contentMail";
        mail("declic62@gmail.com", "test", $body);
        echo "<h1 class='border border-info bg-light'>E-mail send !!!</h1>";
    }else{
        echo "sorry not send mail !";
    }
}catch(Exception $e){
    echo "send error : ".$e->getMessage();
    die;
}
?>
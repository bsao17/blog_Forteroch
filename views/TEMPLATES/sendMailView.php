
 
 <?php

try{
    if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['contentMail'])){
        mail("declic62@gmail.com", "test", $_POST['contentMail']);;
        echo "<h1 class='border border-info bg-light'>E-mail send !!!</h1>";
    }else{
        echo "sorry not send mail !";
    }
}catch(Exception $e){
    echo "send error : ".$e->getMessage();
    die;
}
?>
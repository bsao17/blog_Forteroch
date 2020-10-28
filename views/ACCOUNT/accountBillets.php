<?php
require_once("./views/TEMPLATES/accountBaseTemplate.php");
?>
<?php
foreach ($post as $value) {
    echo "<a href='#{$value['ID']}' class='btn btn-light ml-2 mr-3'><span class='text-dark h4'>" . $value['ID'] . "</span>" . " | "
        . "<strong><u class='text-dark '>" . $value['title'] . "</u></strong></a>";
}
?>



<?php
require_once('./views/commentFormView.php');
require_once("./views/commentDisplayView.php");
require_once("./views/TEMPLATES/footerView.php");

?>
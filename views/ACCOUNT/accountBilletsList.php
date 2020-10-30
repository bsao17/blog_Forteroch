<?php
require_once("./views/TEMPLATES/accountBaseTemplate.php");
?>

<!--card with content-->
<article class="card m-2">
    <p class="lead m-2 p-3 border border-dark">Pourquoi partir ...

        Pourquoi s'évader car oui c'est bien de cela dont on parles, une évasion ! S'enfuir même, la peur de l'immobilité, de la non-action, cette terreur de passer à coté de ma vie me pousse inexorablement vers l'ailleurs, le monde au bout du doigt, l'autre.
        Ce livre retrace l'une de ces fuites en avant, et retrace mon aventure Alaskienne, passionnante, terrifiante, gratifiante mais jamais ennuyeuse ...
        <br><a href="?action=billet1&ID=1" class="btn btn-info">Lire la suite</a>
    </p>
</article>


<article class="card m-2">
    <p class="lead m-2 p-3 border border-dark">Entre juin 2016 et février 2017,

        l'auteur, infatigable arpenteur de la planète, se donne comme défi de se rapprocher le plus possible des pôles Nord puis Sud. Ainsi commence-t-il par l'archipel du Svalbard et son île principale, celle du Spitzberg.
        <br><a href="?action=billet2&ID=<?= $ID=2; ?>" class="btn btn-info">Lire la suite</a>
    </p>
</article>


<article class="card m-2">
    <p class="lead m-2 p-3 border border-dark">Aussi loin que je m'en souvienne,

        le froid m'a toujours attiré bien plus que le chaud,
        <br><a href="?action=billet3&ID=3" class="btn btn-info">Lire la suite</a>
    </p>
</article><br><br><br>
<?php
require_once("./views/TEMPLATES/footerView.php");
?>
    <p>
        <?php
        foreach ($post as $value) {
            echo "<p class='h4 text-center'><strong><u>" . $value['title'] . "</u></strong></p>"; ?>
    </p>
    <article>
    <?=
                "<span class='lead h5 p-3'>" . $value['content'] . "</span>";
        } ?>
    </article>

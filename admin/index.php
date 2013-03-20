<?php

include('../_header.php');

/**
 * Empêche l'accès aux personnes non identifiées
 */
//TODO si on est n'est pas connecté, rediriger ver '../login.php'

$articles = getAllArticles($link);

?>

<p class="text-center" style="margin: 20px 0;">
    <a class="btn btn-primary" href="add.php">Ajouter un article +</a>
</p>

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Titre</th>
            <th>Contenu</th>
            <th>Date</th>
            <th>Enabled</th>
            <th>Activer</th>
            <th>Editer</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>

<?php
while ($article = mysqli_fetch_assoc($articles))
{
?>
        <tr>
            <th><?=$article['id'];?></th>
            <th><?=getExcerpt($article['title'], 150);?></th>
            <th><?=getExcerpt($article['content']);?></th>
            <th><?=$article['date'];?></th>
            <th><?=$article['enabled'];?></th>
            <th>Activer</th>
            <th>Editer</th>
            <th>Supprimer</th>
            <?php //TODO on innove ici en créant les td et leur contenu (pour connaitre le contenu, s'aider des <th> ci-dessus) ?>
        </tr>
<?php
}
?>

    </tbody>
</table>

<?php

include('../_footer.php');
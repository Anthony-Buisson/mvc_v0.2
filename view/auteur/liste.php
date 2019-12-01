
<h1>Auteurs <a href="<?php echo ROOT ?>livre/liste">Livres</a></h1>

<ul>
    <?php foreach($auteurs as $auteur){ ?>
        <li><a href="<?php echo ROOT ?>auteur/detail?id=<?php echo $auteur['id']?>"><?php echo $auteur['nom'] ?></a></li>
    <?php } ?>
</ul>
<a href="<?php echo ROOT ?>auteur/ajouter_modifier">Ajouter un auteur</a>

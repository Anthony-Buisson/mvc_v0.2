<?php
/** @var Auteur $auteur */
/** @var Livre $livres */
?>
<h1>Livres <a href="<?php echo ROOT ?>auteur/liste">Auteurs</a></h1>
<h2>Livres de l'auteur <?php echo $auteur->nom.' '.$auteur->prenom?></h2>
<a href="<?php echo ROOT ?>auteur/detail?id=<?php echo $auteur->id?>">< Retour</a>
<ul>
    <?php if(count($livres) < 1) echo 'Aucun livre'?>
    <?php foreach($livres as $livre){ ?>
        <li><a href="<?php echo ROOT ?>livre/detail?id=<?php echo $livre['id']?>"><?php echo $livre['nom'] ?></a></li>
    <?php } ?>
</ul>
<a href="<?php echo ROOT ?>livre/ajouter_modifier">Ajouter un livre</a>

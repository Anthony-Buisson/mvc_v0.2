<?php
/** @var Auteur $auteur */
?>

<a href="<?php echo ROOT ?>auteur/liste">< Retour</a>
<h1>Informations sur l'auteur n°<?php echo $auteur->id ?></h1>
Nom : <b><?php echo $auteur->nom ?></b><br>
Prénom : <b><?php echo $auteur->prenom ?></b><br>
Date de naissance : <b><?php echo $auteur->date_naissance ?></b><br>

***********
<a href="<?php echo ROOT ?>auteur/ajouter_modifier?id=<?php echo $auteur->id?>">Modifier</a>
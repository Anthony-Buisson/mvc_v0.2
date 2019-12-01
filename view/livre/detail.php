<?php
/** @var Livre $livre */
?>

<a href="<?php echo ROOT ?>livre/liste">< Retour</a>
<h1>Détails du livre n°<?php echo $livre->id ?></h1>
Titre : <b><?php echo $livre->nom ?></b><br>
Résumé : <b><?php echo $livre->resume ?></b><br>
ISBN : <b><?php echo $livre->isbn ?></b><br>
Auteur : <b><?php echo $livre->getAuteur()['nom'].' '.  $livre->getAuteur()['prenom']?></b><br>
Prix : <b><?php echo $livre->prix ?>€</b><br>

***********
<a href="<?php echo ROOT ?>livre/ajouter_modifier?id=<?php echo $livre->id?>">Modifier</a>
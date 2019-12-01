<h1>Livres <a href="<?php echo ROOT ?>auteur/liste">Auteurs</a></h1>

<ul>
<?php foreach($livres as $livre){ ?>
    <li><a href="<?php echo ROOT ?>livre/detail?id=<?php echo $livre['id']?>"><?php echo $livre['nom'] ?></a></li>
<?php } ?>
</ul>
<a href="<?php echo ROOT ?>livre/ajouter_modifier">Ajouter un livre</a>

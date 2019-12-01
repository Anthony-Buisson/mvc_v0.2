
<form action="<?php echo ROOT?>auteur/post" method="post">
    <label for="writer">Prénom : </label>
    <input id="writer" name="prenom" type="text" placeholder="Jean" value="<?php echo isset($auteur->prenom) ? $auteur->prenom : '';?>">
    <br>
    <label for="title">Nom : </label>
    <input id="title" name="nom" type="text" placeholder="Dujardin" value="<?php echo isset($auteur->nom) ? $auteur->nom : '';?>">
    <br>
    <label for="writer">Date de naissance : </label>
    <input id="writer" name="date_naissance" type="date" value="<?php echo isset($auteur->date_naissance) ? $auteur->date_naissance : '';?>">
    <br>
    <input id="id" name="id" type="number" value="<?php echo isset($auteur->id) ? $auteur->id : '';?>" style="display: none;">
    <input type="submit">
</form>
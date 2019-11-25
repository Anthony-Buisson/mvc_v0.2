
<form action="<?php echo ROOT?>livre/post" method="post">
    <label for="title">Titre : </label>
    <input id="title" name="nom" type="text" placeholder="L'emailing parfait" value="<?php echo isset($livre->nom) ? $livre->nom : '';?>">
    <br>
    <label for="isbn">ISBN : </label>
    <input id="isbn" name="isbn" type="text" placeholder="978-2-7654-0912-0" value="<?php echo isset($livre->isbn) ? $livre->isbn : '';?>">
    <br>
    <label for="writer">Auteur : </label>
    <input id="writer" name="auteur" type="text" placeholder="Michel" value="<?php echo isset($livre->auteur) ? $livre->auteur : '';?>">
    <br>
    <label for="price">Prix : </label>
    <input id="price" name="prix" type="number" step="0.01" placeholder="9.99" value="<?php echo isset($livre->prix) ? $livre->prix : '';?>">
    <br>
    <label for="summary">Résumé : </label>
    <textarea id="summary" name="resume" cols="30" rows="10" placeholder="Il marche et tombe dans un trou"><?php echo isset($livre->resume) ? $livre->resume : '';?></textarea>
    <br>
    <input id="id" name="id" type="number" value="<?php echo isset($livre->id) ? $livre->id : '';?>" style="display: none;">
    <input type="submit">
</form>

form modification/creation
controller modif/creation
Model decide
<?php ob_start(); ?>
    <div>
        <form action="index.php?action=addProject&amp;id=<?= $post['id'] ?>" methode="post">
            <select>
                <option value="1">Site vitrine</option>
                <option value="2">Site e-commerce</option>
                <option value="3">Site immobilier</option>
                <option value="3">Site d'agence de voyage</option>
            </select>
            <input name="project_name" type="text" placeholder="Titre du projet" />

            <input type="submit">
            </form>    
        <a class="returnBtn" href="index.php?action=listProjects">Retour</a>
    </div>
<?php 
$content = ob_get_clean();
require('template.php');
?>
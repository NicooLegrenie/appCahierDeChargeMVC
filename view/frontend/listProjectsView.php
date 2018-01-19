<?php ob_start(); ?>
    <div>
        <a class="addBtn" href="index.php?action=addProject">Ajouter un projet</a>
            <?php
            while ($data = $projects->fetch()) {
            ?>
            <p>
                <?php echo $data['test_text']; ?>
            </p>
            <?php
            }
            $projects->closeCursor();
            ?>
        <a class="returnBtn" href="index.php">Retour</a>
    </div>
<?php 
$content = ob_get_clean();
require('template.php');
?>
<?php ob_start(); ?>
    <h1>Gestionnaire de cahiers de charges</h1>
    <nav id="MenuIntro" class="menu">
        <ul class="nospace">
         <li><a href="index.php?action=listProjects">Site</a></li>
         <li><a href="#">Application</a></li>
         <li><a href="#">Community Management</a></li>
         <li><a href="#">Press</a></li>
        </ul>
    </nav>
<?php 
$content = ob_get_clean(); 
require ('template.php');
?>

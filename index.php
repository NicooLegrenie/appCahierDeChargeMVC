<?php 
require ('controller/frontend.php');
try{
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listProjects') {
            listProjects();
        } elseif ($_GET['action'] == 'addProject') {

                if (!empty($_POST['project_name'])) {
                    addProject($_GET['project_name']);
                } else {
                    echo 'Erreur : tous les champs ne sont pas remplis !';
                }
                
            }

    } else {
        home();
    } 
}catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}

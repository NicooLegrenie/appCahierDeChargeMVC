<?php
    function dbConnect()
    {
        $user = 'root';
        $pass = 'root';
        $host = 'localhost';
        $dbname = 'specifications';

        try {
            $db = new PDO('mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8', $user, $pass);
            return $db;

        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

    }
function getProjects()
{
    $db = dbConnect();
    $projects = $db->query('SELECT * FROM test');

    return $projects;
}
function postProject($projectName){
    $db = dbConnect();

    $addProjects = $db->prepare('INSERT INTO test(test_text) VALUES(?)');
    $saveProject = $addProjects->execute(array(
        $projectName
    ));
    return $saveProject;
}
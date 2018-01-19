<?php

require ('model/frontend.php');

function listProjects(){
    $projects = getProjects();

    require ('view/frontend/listProjectsView.php');
}
function addProject($projectName)
{
    $saveProject = postProject($projectName);
    require ('view/frontend/addProjectView.php');
}
function home(){
    require ('view/frontend/homeView.php');
}

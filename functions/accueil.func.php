<?php
function get_projects(){
    global $db;
    $req = $db->query("
        SELECT  projects.id
                projects.nom
                projects.image
                projects.description
                projects.objectif
                projects.url
                projects.date
        FROM  projects 
        WHERE online='1' 
        ORDER BY date DESC
    ");
    $results = array();
    while($rows = $req->fetchObject()){
        $results[] = $rows;
    }
    return $results;
}

function get_articles(){
    global $db;
    $req = $db->query("SELECT * FROM articles WHERE online='1' ORDER BY date DESC");
    $results = [];
    while($rows = $req->fetchObject()){
        $results[] = $rows;
    }
    return $results;
}

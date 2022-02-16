<?php
    function get_articles(){
        global $db;
        $req = $db->query("
            SELECT  articles.id,
                    articles.nom,
                    article.image,
                    articles.description,
                    articles.date 
            FROM articles WHERE articles.id='{$_GET['id']} 
            AND online = '1'
        ");
        $results = $req->fetchObject();
        return $results;

    }
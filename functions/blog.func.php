<?php
    function get_articles(){
        global $db;
        $req = $db->query("SELECT * FROM articles WHERE online='1' ORDER BY date DESC");
        $results = [];
        while($rows = $req->fetchObject()){
            $results[] = $rows;
        }
        return $results;
}


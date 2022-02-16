<?php
    function get_projects(){
        global $db;
        $req = $db->query("SELECT * FROM projects WHERE online='1' ORDER BY date DESC");
        $results = [];
        while($rows = $req->fetchObject()){
            $results[] = $rows;
        }
        return $results;
}

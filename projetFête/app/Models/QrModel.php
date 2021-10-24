<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class QrModel extends Model{

    /*public static function displayAll(){
        $result = DB::select('SELECT repositories.id AS id, repositories.name AS répertoires, contributors.name AS noms, COUNT(commits.repository_id) AS nbCommits
        FROM repositories
        JOIN contributors ON contributors.login =repositories.contributor_login
        LEFT JOIN commits ON commits.repository_id = repositories.id
        GROUP BY repositories.id, repositories.name, contributors.name');
        return $result;
    }
    public static function getRepository($id){

        $pdo = DB::getPdo();
        $sql = "SELECT repositories.name AS repository, contributors.name, commits.message, commits.date
        FROM repositories
        JOIN contributors ON contributors.login = repositories.contributor_login
        JOIN commits ON commits.repository_id = repositories.id
        WHERE repositories.id = :id";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam("id", $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }*/
}

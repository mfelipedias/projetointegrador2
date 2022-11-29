<?php

namespace App\Models;

use LDAP\Result;

class Atividade
{
    private static $table =  'atv_aluno';
    public static function select(int $id)
    {

        $connPdo = new \PDO('mysql:host=acorde.mysql.uhserver.com;dbname=acorde', 'acorde', 'Acorde.102030', array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        
        $sql = 'SELECT * FROM ' . self::$table . ' WHERE atv_aluno = :id';
        
        $stmt = $connPdo->prepare($sql);
        
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            while ($row=$stmt->fetch(\PDO::FETCH_ASSOC)) {
            return $row;
            }
        } else {
            throw new \Exception("Nenhum aluno encontrato!");
        }
    
    }

    public static function selectAll()
    {
        $connPdo = new \PDO('mysql:host=acorde.mysql.uhserver.com;dbname=acorde', 'acorde', 'Acorde.102030', array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        
        $sql = 'SELECT * FROM atv_aluno INNER JOIN alunos ON atv_aluno=id_aluno INNER JOIN  atividades ON atv_atividade=id_atividade';
        $stmt = $connPdo->prepare($sql);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } else {
            throw new \Exception("Nenhum aluno encontrado!");
        }
    }
}

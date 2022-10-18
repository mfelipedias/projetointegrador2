<?php

namespace App\Models;

use LDAP\Result;

class Aluno
{
    private static $table =  'alunos';
    public static function select(int $id)
    {

        $connPdo = new \PDO('mysql:host=acorde.mysql.uhserver.com;dbname=acorde', 'acorde', 'Acorde.102030', array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        
        $sql = 'SELECT * FROM ' . self::$table . ' WHERE id_aluno = :id';
        $stmt = $connPdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return $stmt->fetch(\PDO::FETCH_ASSOC);
        } else {
            throw new \Exception("Nenhum aluno encontrato!");
        }
    }

    public static function selectAll()
    {
        $connPdo = new \PDO('mysql:host=acorde.mysql.uhserver.com;dbname=acorde', 'acorde', 'Acorde.102030', array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

        $sql = 'SELECT * FROM ' . self::$table;
        $stmt = $connPdo->prepare($sql);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } else {
            throw new \Exception("Nenhum aluno encontrado!");
        }
    }
}

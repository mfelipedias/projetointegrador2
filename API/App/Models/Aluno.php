<?php

namespace App\Models;

use LDAP\Result;

class Aluno
{
    private static $table =  'alunos';
    public static function select(int $id)
    {

        $connPdo = new \PDO('mysql:host=acorde.mysql.uhserver.com;dbname=acorde', 'acorde', 'Acorde.102030');
        $sql = 'SELECT * FROM ' . self::$table . ' WHERE id_aluno = :id';
        $stmt = $connPdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $result = $stmt->fetch(\PDO::FETCH_ASSOC);
            print_r($result);
        } else {
            throw new \Exception("Nenhum aluno encontrato!");
        }
    }

    public static function selectAll()
    {
        $connPdo = new \PDO('mysql:host=acorde.mysql.uhserver.com;dbname=acorde', 'acorde', 'Acorde.102030');

        $sql = 'SELECT * FROM ' . self::$table;
        $stmt = $connPdo->prepare($sql);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            print_r($result);
        } else {
            throw new \Exception("Nenhum aluno encontrado!");
        }
    }
}

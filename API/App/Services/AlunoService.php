<?php

namespace App\Services;

use App\Models\Aluno;

class AlunoService
{
    public function get($id = null)
    {
        if ($id) {
            return Aluno::select($id);
        } else {
            return Aluno::selectAll();
        }
    }

    public function post()
    {
    }
    public function update()
    {
    }
    public function delete()
    {
    }
}

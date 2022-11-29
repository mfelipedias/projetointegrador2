<?php

namespace App\Services;

use App\Models\Atividade;

class AtividadeService
{
    public function get($id = null)
    {
        if ($id) {
            return Atividade::select($id);
        } else {
            return Atividade::selectAll();
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

<?php

namespace App\Actions\Pessoa;

use App\Models\Pessoa;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class filtraPessoa
{
    /**
     * Filtra a pessoa pelo id, pelo nome ou pelo cpf.
     */
    public function filtra(string $busca): Collection
    {
        return Pessoa::where('id', $busca)
        ->orWhere('cpf', $busca)
        ->orWhere('nome', 'like', '%' . $busca . '%')
        ->get();
    }
}
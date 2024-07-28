<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pessoa extends Model
{
    use HasFactory;
    protected $table = 'people';

    public function Enderecos(): HasMany
    {
        return $this->hasMany(Endereco::class, 'pessoa_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $table = 'adresses';

    public function Pessoa()
    {
        return $this->belongsTo(Pessoa::class, 'pessoa_id');
    }
}

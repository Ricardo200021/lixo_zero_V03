<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denuncias extends Model
{
    use HasFactory;

    protected $table = 'denuncias';
    protected $fillable = [
        'user_id',
        'caminho_foto',
        'endereco',
        'situacao'
    ];
}

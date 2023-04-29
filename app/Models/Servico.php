<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nome',
        'telefone',
        'origem',
        'data',
        'observacao',
    ];

    protected $casts = [

        'data' => 'datetime:d/m/Y'

    ];
}

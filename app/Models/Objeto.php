<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;


class Objeto extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'marca',
        'modelo',
        'tipo',
        'preco',
        'estado',
        'data_fabricacao',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{


    use HasFactory;
    protected $primaryKey = 'idEvento';
    protected $fillable = [
            'nomeEvento',
            'dataEvento',
            'localEvento',
            'imgEvento'
    ];
}

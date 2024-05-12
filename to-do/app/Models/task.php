<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    use HasFactory;

    protected $table = 'tasks'; //nombre de la tabla a llenar

    protected  $fillable =[
        'name' //campo a llenar en tabla
    ];
}

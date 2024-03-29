<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




class Client extends Model
{
    use HasFactory;
   
    protected $connection = 'mysql2';
    protected $table = 'client';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'sex',
        'birth_date'
    ];
}

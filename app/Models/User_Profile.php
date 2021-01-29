<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Profile extends Model
{
    use HasFactory;
    
    public $timestamps = true;//set time to false
    
    protected $fillable=[
        'username','firstname','lastname', 'dayofbirth', 'password'
    ];

    protected $primarykey ='id';
    protected $table ='users';
}

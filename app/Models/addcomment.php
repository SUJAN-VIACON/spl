<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addcomment extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable  = [
        
        'name',
        'mail',
        'queries'
       
       

        
    ];
    protected $table="addcomment";
}

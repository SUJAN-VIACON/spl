<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exam extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable  = [
        
        'class',
        'board',
        'course',
        'subject',
        'notice',
        'timeing'
       
       

        
    ];
    protected $table="exam";
}

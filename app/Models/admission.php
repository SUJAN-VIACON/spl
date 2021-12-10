<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admission extends Model
{
    use HasFactory;
    protected $fillable  = [
        
        
        'studentname',
        'guardianname',
        'dateofbirth',
        'class',
        'board',
        'email',
        'studentnumber',
        'guardiannumber',
        'course',
        'subjects',
        'image',
        'approved',
        'selected'
    ];
    protected $table="admissions";
}

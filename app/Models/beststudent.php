<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beststudent extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable  = [
        
        
        'head1',
        'head2',
        'head3',
        'head4',
        'head5',
        'image'

        
    ];
    protected $table="beststudents";
}

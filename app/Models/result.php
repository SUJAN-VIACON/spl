<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $table = "results";

    protected $fillable = [
        'user_id',
        'student_answers',
        'exam_event_id'
    ];

    protected $casts = [
        'student_answers' => 'array',
    ];


    // * relations

    public function user(){
        return $this->belongsTo(User::class);
    }

    // public function examEvent(){
    //     $this->hasMany(ExamEvent::class);
    // }
}

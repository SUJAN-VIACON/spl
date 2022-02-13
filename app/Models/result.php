<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function examEvent(){
    //     $this->hasMany(ExamEvent::class);
    // }

    //scopes

    public function scopeCurrentResult($query)
    {
        return $query->where('user_id', Auth::id())->latest()->first();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Result;

class questioncontroller extends Controller
{
    public function show_question()
    {
        $result = Result::query()->latest()->first();

        return (view('home.question', compact('result')));
    }

    public function result()
    {
        $result = result::query()->currentResult()->first();
        return view('home.result', compact('result'));
    }
}

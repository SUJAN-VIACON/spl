<?php

namespace App\Http\Controllers;

use App\Models\addquestion;
use Illuminate\Http\Request;

class addquestioncontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $question = addquestion::all();


        return (view('admin.view_question', compact('question')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.add_question');
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'question_no' => 'required',
            'answer' => 'required',
            'image' => 'required',
             'marks' => 'required'

        ]);
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'public/image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        addquestion::create($input);


        return redirect()->route('addquestion.create')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\addquestion  $addquestion
     * @return \Illuminate\Http\Response
     */
    public function show(addquestion $addquestion)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\addquestion  $addquestion
     * @return \Illuminate\Http\Response
     */
    public function edit(addquestion $addquestion)
    {
        return view('admin.edit_question', compact('addquestion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\addquestion  $addquestion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, addquestion $addquestion)
    {
       
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'public/image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        $addquestion->update($input);

        return redirect()->route('addquestion.index')
            ->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\addquestion  $addquestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(addquestion $addquestion)
    {
        $a = $addquestion->delete();

        if ($a) {
            return redirect()->route('addquestion.index')
                ->with('success', 'Product deleted successfully');
        }
    }
}

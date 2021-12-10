<?php

namespace App\Http\Controllers;

use App\Models\beststudent;
use Illuminate\Http\Request;

class beststudent_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = beststudent::all();
        return (view('admin.add_beststudent',compact('student')));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
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
            'head1' => 'required',
            'head2' => 'required',
            'head3' => 'required',
            'head4' => 'required',
            'head5' => 'required',
            'image' => 'required',
           
            
        ]);

        $input = $request->all();
        
        if ($image = $request->file('image')) {
            $destinationPath = 'public/image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        beststudent::create($input);

       
        return redirect()->route('beststudents.index')
        ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\beststudent  $beststudent
     * @return \Illuminate\Http\Response
     */
    public function show(beststudent $beststudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\beststudent  $beststudent
     * @return \Illuminate\Http\Response
     */
    public function edit(beststudent $beststudent)
    {
        return view('admin.edit_beststudent',compact('beststudent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\beststudent  $beststudent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, beststudent $beststudent)
    {
       
    
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
          
        $beststudent->update($input);
    
        return redirect()->route('beststudents.index')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\beststudent  $beststudent
     * @return \Illuminate\Http\Response
     */
    public function destroy(beststudent $beststudent)
    {
        $a= $beststudent->delete();

        if($a){
            return redirect()->route('beststudents.index')
            ->with('success','Product deleted successfully');
        }
    }
}

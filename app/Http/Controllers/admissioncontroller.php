<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admission;
use App\Models\User;

class admissioncontroller extends Controller
{


    public function viewadmission()
    {
        $user = admission::all();
        return (view('admin.admission_info', compact('user')));
    }


    public function addadmission($id)
    {

        $user = admission::find($id);
        $user->approved = "1";
        $user->save();
       
        return redirect()->route('viewadmission')
            ->with('success', 'user added successfully');
    }

    public function removeadmission($id)
    {


        $user = admission::find($id);
        $user->approved = "0";
        $user->save();
       
        return redirect()->route('viewadmission')
            ->with('success', 'user removed successfully');
    }
    public function editadmission($id)
    {
    }
    public function deleteadmission($id)
    {


        $user = admission::find($id);

        $user->delete();


        return redirect()->route('viewadmission')->with('success', 'user deleted successfully.');
    }
}

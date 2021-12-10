<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\beststudent;
use App\Models\gallery;
use App\Models\admission;
use App\Models\comment;
use App\Models\exam;

use App\Models\addcomment;
use Illuminate\Contracts\Session\Session;

class homecontroller extends Controller
{
    public function home()
    {
        $student = beststudent::all();
        $gallery = gallery::all();
        $comment = addcomment::all();
          $notice=exam::all()->sortByDesc("id");
        if (session()->has('password_hash_web')) {
            $userpass = session()->get('password_hash_web');
            $users = user::where('password', '=', $userpass)->first();
            $userno = admission::where('email', '=', $users->email)->count();

            if ($userno == 0) {
                if (session()->has('admission')) {
                    session()->forget('admission');
                }
                return (view('home.home', compact('student', 'gallery', 'comment','notice')));
            } else {
                $user = admission::where('email', '=', $users->email)->first();
                session()->put('admission', '1');
                if ($user->exam == 0) {
                    return (view('home.home', compact('student', 'gallery', 'comment', 'user','notice')));
                }else{
                    $examid=$user->exam;
                    $exam=exam::where('id','=',$examid)->first();
                  
                    return (view('home.home', compact('student', 'gallery', 'comment', 'user','exam','notice')));

                }
            }
        } else {
            return (view('home.home', compact('student', 'gallery', 'comment','notice')));
        }

    }
    public function userinfo()
    {
       
        $user = user::all();
        return (view('admin.userinfo', compact('user')));
    }

    public function location()
    {$notice=exam::all()->sortByDesc("id");
       if (session()->has('password_hash_web')) {
            $userpass = session()->get('password_hash_web');
            $users = user::where('password', '=', $userpass)->first();
            $userno = admission::where('email', '=', $users->email)->count();
  
            if ($userno == 0) {
                if (session()->has('admission')) {
                    session()->forget('admission');
                }
                return (view('home.location',compact('notice')));
            } else {
                $user = admission::where('email', '=', $users->email)->first();
                
                if ($user->exam == 0) {
                    return (view('home.location', compact( 'user','notice')));
                }else{
                    $examid=$user->exam;
                    $exam=exam::where('id','=',$examid)->first();
                    return (view('home.location', compact( 'user','exam','notice')));

                }
            }
        } else {
            return (view('home.location',compact('notice')));
        }
       
    }


    public function redirect()
    {
        if (Auth::id()) {

            if (Auth::user()->usertype == '0') {
                return redirect()->route('home');
            } else {
                return redirect()->route('gallerys.index');
            }
        } else {
            return redirect()->back();
        }
    }



    public function comment(Request $request)
    {

        if (Auth::check()) {
            $this->validate(request(), [
                'queries'=>'required'
            ]);

           
            $userpass=session()->get('password_hash_web');
            $users = user::where('password','=',$userpass)->first();
            
            $user = new comment();
            $user->name = $users->name;
            $user->mail = $users->email;
            $user->queries = $request['queries'];
            // add other fields
            $user->save();


            return redirect()->route('home');
        } else {
            return redirect()->route('register');
        }
    }

    public function viewcomment(){
        $comment = comment::all();
        $addcomment = addcomment::all();
        return (view('admin.add_comment',compact('comment','addcomment')));
    }

    public function commentadd($id){
        $comment = comment::find($id);
   
        $user = new addcomment();
        $user->name = $comment->name;
        $user->mail = $comment->mail;
        $user->queries = $comment->queries;
          // add other fields
          $user->save();


          return redirect()->route('viewcomment')->with('success', 'comment added on homepage  successfully.');
       
    }

    public function deletecomment($id){
        $comment = comment::find($id);
   
        $comment->delete();


          return redirect()->route('viewcomment')->with('success', 'comment deleted successfully.');
       
    }

    
    public function deleteaddcomment($id){
        $comment = addcomment::find($id);
   
        $comment->delete();


          return redirect()->route('viewcomment')->with('success', 'comment deleted successfully.');
       
    }

    public function admission()
    {
      
        return view('home.admission');
       
    }

    public function admissiondata(Request $request)
    {
          $userpass=session()->get('password_hash_web');
            $users = user::where('password','=',$userpass)->first();
        $count = admission::where('email','=',$users->email)->count();
        if($count==1){
              return redirect()->route('admission')
            ->with('error', 'user has already registered ㋛ !!');
        }else{
              $request->validate([
                'studentname' =>   'required',
                'guardianname' => 'required',
                'dateofbirth' => 'required',
                'class' => 'required',
                'board' => 'required',
                'email' =>  [  'unique:users'],
                // 'studentnumber' => 'required',
                'guardiannumber' => 'required',
                'course' => 'required',
                'subjects' => 'required',
                'image' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
                
               
                
            ]);
    
            $input = $request->all();
    
          
            $input['email']=$users->email;
            $arraytostring = implode(',',$request->input('subjects'));
            $input['subjects'] =$arraytostring;
            if ($image = $request->file('image')) {
                $destinationPath = 'public/image/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['image'] = "$profileImage";
            }
            admission::create($input);
    
           
            return redirect()->route('admission')
            ->with('success', '☺ data registered successfully ☺.');
        }
            
        
       
          
      
       

    }


}

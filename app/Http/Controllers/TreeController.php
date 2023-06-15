<?php

namespace App\Http\Controllers;

use Hash;
use Session;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\DB;


class TreeController extends Controller
{
    public function index(Request $request){

        $all_User=User::all();

        return view('page_contant.index',compact('all_User'));
    }
    
    public function index2(Request $request){

        return view('page_contant.index2');
    }

    public function create()
    {
        $all_User=User::all();
        
        return view('page_contant.create',compact('all_User'));
        
    }
  
    public function store(Request $request)
    {
      
        $request->validate([
           
            'email'=>'required',
            'password'=>'required',
           
        
   ]);
            $all_users=new User();
            $all_users->name=$request->name;
            $all_users->email=$request->email;
            $all_users->password=$request->password;
            $all_users->save();
          
            return redirect('page_contant/index2')->with('status','the user is added');
            
 }  
   public function login()
    {
        $all_User=User::all();
        
        return view('page_contant.login',compact('all_User'));
        
    }
 
 
 
 public function storelogin(Request $request)
 {
   
     $request->validate([
        
         'email'=>'required',
         'password'=>'required',
        
     
]);
          
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect("page_contant/index2")->withSuccess('Success Login ');
        }

        return redirect("page_contant/login")->withSuccess('Login details are not valid');
        }


   
 public function edit($id)
 {
     $users=User::find($id);
    
     return view('page_contant.edit',compact('users'));
 }
 public function show($id)
 {
     //
 }

 public function update(Request $request, $id)
 {
    {
      
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
           
        
   ]);
            $all_users=User::find($id);
            $all_users->name=$request->name;
            $all_users->email=$request->email;
            $all_users->password=$request->password;
            $all_users->update();
            return redirect('page_contant/index')->with('status','the user is Updated');
            
 }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $send=User::find($id);
        $send->delete();
    return back()->with('status','Done Product Delete');
    }
}





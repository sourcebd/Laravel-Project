<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Customer;
use App\Admin;
use Validator;
use App\Http\Requests\AdminRequest;
use App\Http\Requests\AdminUpdateRequest;

class AHomeController extends Controller
{
    public function index( Request $req){

       

       

        return view('admin.admin');

    }

   public function show($id){

        $user = Admin::find($id);
        //print_r($user);
        return view('admin.details')->with('user', $user);
    }

    public function create(){
        return view('admin.create');
    }

    public function store(AdminRequest $req){


        if($req->hasFile('myfile')){
            $file = $req->file('myfile');  
           
            
            $filename = time().".".$file->getClientOriginalExtension();
            
            $file->move('upload', $filename);

            $user = new Admin();
            $user->username     = $req->username;
            $user->password     = $req->password;
            $user->email        = $req->email;
            $user->name         = $req->name;
            $user->dob          = $req->dob;
            $user->father_name  = $req->father;
            $user->mother_name  = $req->mother;
            $user->gender       = $req->gender;
            $user->blood_group  = $req->blood;
            $user->address      = $req->addr;
            $user->phone       = $req->phone;
            $user->type         = $req->type;
            $user->nid_no       = $req->nid;
            $user->profile_img  = $filename;
            $user->save();

            $req->session()->flash('msg', 'Admin information created successfully...');
            return redirect()->route('admin.userlist');

        }  

    }

    public function edit($id){
        
        $user = Admin::find($id);
        return view('admin.edit')->with('user', $user);
    }


    public function update($id, AdminUpdateRequest $req){

        if($req->hasFile('myfile')){
            $file = $req->file('myfile');  
           
            
            $filename = time().".".$file->getClientOriginalExtension();
            
            $file->move('upload', $filename);

        $user = Admin::find($id);

        $user->username     = $req->username;
        $user->password     = $req->password;
        $user->email        = $req->email;       
        $user->name         = $req->name;
        $user->dob          = $req->dob;
        $user->father_name  = $req->father;
        $user->mother_name  = $req->mother;
        $user->gender       = $req->gender;
        $user->blood_group  = $req->blood;
        $user->address      = $req->addr;
        $user->phone       = $req->phone;
        $user->type         = $req->type;
        $user->nid_no       = $req->nid;
        $user->profile_img  = $filename;
        $user->save();

        $req->session()->flash('msg', 'Admin information updated successfully...');
        return redirect()->route('admin.userlist');
    }

    }

    public function userlist(Request $req){

        $name = Admin::all();

        $value = $req->session()->get('username');
        $userlist = Admin::where('username','=',$value)->get();   
        return view('admin.list')->with('list', $userlist)->with('name',$name);

    }

    public function delete($id){

        $user = Admin::find($id);
        return view('admin.delete')->with('user', $user);
    }

    public function destroy($id, Request $req){

        if(Admin::destroy($id)){
            $req->session()->flash('msg', 'Admin account removed successfully...');
            return redirect()->route('logout.index');
        }else{
            return redirect('/E-Pay/home/delete/admin/'.$id);
        }

    } 
}

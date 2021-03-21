<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Admin;
use App\Desk_manager;
use App\Service_provider;
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
      
        return view('admin.details')->with('user', $user);

    }
     public function showcus($cid){

        $user = Customer::find($cid);
       return view('admin.details')->with('user', $user);
         
    } 
    public function showdesk($did){

        $user = Desk_manager::find($did);
       return view('admin.details')->with('user', $user);
         
    } 
    public function showservice($sid){

        $user =Service_provider::find($sid);
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

    public function editC($cid){
        
        $user = Customer::find($cid);
        return view('admin.edit')->with('user', $user);
    }
    public function editD($did){
        
        $user = Desk_manager::find($did);
        return view('admin.edit')->with('user', $user);
    }
    public function editS($sid){
        
        $user = Service_provider::find($sid);
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

    public function updateC($cid, AdminUpdateRequest $req){

        if($req->hasFile('myfile')){
            $file = $req->file('myfile');  
           
            
            $filename = time().".".$file->getClientOriginalExtension();
            
            $file->move('upload', $filename);

        $user = Customer::find($cid);

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

        $req->session()->flash('msg', 'Customer information updated successfully...');
        return redirect()->route('admin.userlist');
    }

    }

    public function updateD($did, AdminUpdateRequest $req){

        if($req->hasFile('myfile')){
            $file = $req->file('myfile');  
           
            
            $filename = time().".".$file->getClientOriginalExtension();
            
            $file->move('upload', $filename);

        $user = Desk_manager::find($did);

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

        $req->session()->flash('msg', 'Desk Manager information updated successfully...');
        return redirect()->route('admin.userlist');
    }

    }

    public function updateS($sid, AdminUpdateRequest $req){

        if($req->hasFile('myfile')){
            $file = $req->file('myfile');  
           
            
            $filename = time().".".$file->getClientOriginalExtension();
            
            $file->move('upload', $filename);

        $user = Service_provider::find($sid);

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

        $req->session()->flash('msg', 'Service Provider information updated successfully...');
        return redirect()->route('admin.userlist');
    }

    }

    public function userlist(Request $req){

        $name = Admin::all();
        $c    = Customer::all();
        $d    = Desk_manager::all();
        $s    = Service_provider::all();

        $value = $req->session()->get('username');
        $userlist = Admin::where('username','=',$value)->get(); 
       // $userlist = Customer::where('username','=',$value)->get();   
        return view('admin.list')->with('list', $userlist)->with('name',$name)->with('c',$c)->with('d',$d)->with('s',$s);

    }

/*     public function list(Request $req){

        $name = Admin::all();

        $value = $req->session()->get('username');
        $userlist = Admin::where('username','=',$value)->get();   
        return view('admin.list')->with('list', $userlist)->with('name',$name);

    } */

    public function delete($id){

        $user = Admin::find($id);
        return view('admin.delete')->with('user', $user);
    }
    public function deleteC($cid){

        $user = Customer::find($cid);
        return view('admin.delete')->with('user', $user);
    }
    public function deleteD($did){

        $user = Desk_manager::find($did);
        return view('admin.delete')->with('user', $user);
    }
    public function deleteS($sid){

        $user = Service_provider::find($sid);
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

    public function destroyC($cid, Request $req){

        if(Customer::destroyC($cid)){
            $req->session()->flash('msg', 'Customer account removed successfully...');
            return redirect()->route('logout.index');
        }else{
            return redirect('/E-Pay/home/delete/customer/'.$cid);
        }

    } 

    public function destroyD($did, Request $req){

        if(Desk_manager::destroyD($did)){
            $req->session()->flash('msg', 'Desk Manager account removed successfully...');
            return redirect()->route('logout.index');
        }else{
            return redirect('/E-Pay/home/delete/deskManager/'.$did);
        }

    } 

    public function destroyS($sid, Request $req){

        if(Service_provider::destroyS($sid)){
            $req->session()->flash('msg', 'Service Provider account removed successfully...');
            return redirect()->route('logout.index');
        }else{
            return redirect('/E-Pay/home/delete/serviceProvider/'.$sid);
        }

    } 

}

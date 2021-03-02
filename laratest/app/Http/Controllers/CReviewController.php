<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use App\Http\Requests\ReviewRequest;

class CReviewController extends Controller
{
    public function index( Request $req){

        $name = "Nafi";
        $id = "123";

        //return view('home.index', ['name'=> 'xyz', 'id'=>12]);
        // return view('home.index')
        //         ->with('name', 'Nafi')
        //         ->with('id', '12');

        // return view('home.index')
        //         ->withName($name)
        //         ->withId($id);

        return view('home.customer', compact('id', 'name'));

    }

    public function show($id){

        $user = User::find($id);
        //print_r($user);
        return view('home.Creviewdetails')->with('user', $user);
    }


    public function edit($id){
        
        $user = User::find($id);
        return view('home.Creviewedit')->with('user', $user);
    }


    public function update($id, Request $req){

        $user = User::find($id);
        
        $user->reviewdate = $req->dor;
        $user->review     = $req->review;
        $user->feedback   = $req->feedback;
        $user->save();

        return redirect()->route('home.Creviewuserlist');
    }

    public function userlist(){
        
        $userlist = User::all();
        //$userlist = $this->getUserlist();
        return view('home.Creviewlist')->with('list', $userlist);
    }

    /*public function getUserlist (){

        return [
                ['id'=>1, 'name'=>'alamin', 'email'=> 'alamin@aiub.edu', 'password'=>'123'],
                ['id'=>2, 'name'=>'abc', 'email'=> 'abc@aiub.edu', 'password'=>'456'],
                ['id'=>3, 'name'=>'xyz', 'email'=> 'xyz@aiub.edu', 'password'=>'789']
            ];
    }*/

}

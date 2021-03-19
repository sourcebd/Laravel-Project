<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Validator;
use App\Http\Requests\AMessageRequest;
use App\Http\Requests\AMessageUpdateRequest;

class AMessageController extends Controller
{
    public function index( AMessageRequest $req){

        $name = "Nafi";
        $id = "123";

        //return view('admin.index', ['name'=> 'xyz', 'id'=>12]);
        // return view('admin.index')
        //         ->with('name', 'Nafi')
        //         ->with('id', '12');

        // return view('admin.index')
        //         ->withName($name)
        //         ->withId($id);

        return view('admin.admin', compact('id', 'name'));

    }

    public function show($id){

        $message = Message::find($id);
        //print_r($message);
        return view('admin.messagedetails')->with('message',$message);
    }
   

    public function edit($id){
        
        $message = Message::find($id);
        return view('admin.messageedit')->with('message', $message);
    }


    public function update($id, AMessageRequest $req){

        $message = Message::find($id);

        $message->admin_name     = $req->admin_name;
        $message->admin_message     = $req->admin_message;
        $message->save();

        $req->session()->flash('msg', 'Your Message has been edited...');
        return redirect()->route('admin.messagelist');
    }
    

    public function list(Request $req){
        
         $messagelist = message::all();
        return view('admin.messagelist')->with('list', $messagelist);
    }

    public function delete($id){

        $message = Message::find($id);
        return view('admin.messagedelete')->with('message', $message);
    }

    public function destroy($id, Request $req){

        if(Message::destroy($id)){
            $req->session()->flash('msg', 'Your Message has been deleted...');
            return redirect()->route('admin.messagelist');
        }else{
            return redirect('/E-Pay/home/delete/message/admin/'.$id);
        }

    }


    /*public function getmessagelist (){

        return [
                ['id'=>1, 'name'=>'alamin', 'email'=> 'alamin@aiub.edu', 'password'=>'123'],
                ['id'=>2, 'name'=>'abc', 'email'=> 'abc@aiub.edu', 'password'=>'456'],
                ['id'=>3, 'name'=>'xyz', 'email'=> 'xyz@aiub.edu', 'password'=>'789']
            ];
    }*/

}

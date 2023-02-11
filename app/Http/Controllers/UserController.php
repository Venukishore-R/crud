<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

//to create .
    public function create(){
        return view("create_user");
    }

    public function store(Request $request){
        // $name = $request['name'];
        // $phone = $request['phone'];
        // $age = $request['age'];

        // $user = new User();
        // $user->name = $name;
        // $user->phone = $phone;
        // $user->age = $age;

        // $user->save();

        $data = $request->only('name','age','phone');

        $user =  User::create($data);

        return "Value stored and user id is".$user->id;
    }

//to  read the data from database
    public function display(){
        $users = User::all();
        return view('list_user',['users'=>$users]);
    }
// to update.
    public function edit($id){
        $user =  User::find($id);
        return view("edit_user", ['user'=>$user]);
    }

    public function update(Request $request,$id){
        $user = User::find($id);
        
        //updating .
        $user->name =  $request->input('name');
        $user->age = $request->input('age');
        $user->phone = $request->input('phone');

        $user->save();

        return 'Updated  successfully <a href="'.url('list').'">Click here to see the list</a>';
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();
            return 'User deleted <a href="'.url('list').'">Click here to see the list</a>';
    }
}

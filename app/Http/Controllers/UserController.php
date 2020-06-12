<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserCreate;
use App\Http\Requests\UpdateRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	$users = User::all();
    	return view('user.liste_user', ['users' => $users]);
    }

     public function create(){
    	return view('user.create_user');
    }

     public function store(UserCreate $request){
                User::create([
                    'name' => $request->name,
                    'psoeudo' => $request->psoeudo,
                    'password' => Hash::make($request->pwd),
                    'tel' => $request->tel,
                    'email' => $request->email,
                    'fonction' => $request->fonction,
                ]);                

             return redirect(route('user.index'));
        //
    	
    	
    }

    public function show($id){
        $user = User::findOrFail($id);
        //dd($user);
        return view('user.show_user', ['user'=>$user]);
    }

    public function edit($id){
        $user = User::findOrFail($id);
        //dd($user);
        return view('user.edit_user', ['user'=>$user]);
    }

    public function update(UpdateRequest $request, $id){
        User::where('id', $id)->update([
                    "name"=>$request->name,
                    "psoeudo" => $request->psoeudo,
                    "tel" => $request->tel,
                    "email" => $request->email,
                    "fonction" => $request->fonction,
                    ]);
        return redirect(route('user.index'));
    }

    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect(route('user.index'));
        dd($user->name);
    }
}

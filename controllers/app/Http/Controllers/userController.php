<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        //$users =user::all();
        //$users = User::where('age','>', 18)->orderBy('age', 'asc')->get();
        $users = DB::select(DB::raw("SELECT * FROM users"));

        return view('user.index', compact('users'));
    }

    public function create(){
        $user = new User;
        $user->name = "Juan";
        $user->email = "juan@email.com";
        $user->password = Hash::make('1234');
        $user->age = 30;
        $user->address = "Avenida demostración 10";
        $user->zip_code = 38001;
        $user->save();

        User::create([
            "name"=>"Laura",
            "email"=>"laura@email.com",
            "password"=> Hash::make('12345'),
            "age"=> 25,
            "address"=>"Avenida pruebas 2",
            "zip_code"=>38025
        ]);

        User::create([
            "name"=>"LauPedrora",
            "email"=>"laura@email.com",
            "password"=> Hash::make('123459'),
            "age"=> 35,
            "address"=>"Avenida pruebas 3",
            "zip_code"=>38001
        ]);

        return redirect()->route('user.index');
    }



}
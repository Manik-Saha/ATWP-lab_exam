<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;
use App\Models\AllUser;

class RegistrationController extends Controller
{
    public function index(){
        return view('registration.index');
    }

    public function store(RegistrationRequest $req){
        if($req->password == $req->Cpassword){
            $user = new AllUser();
            $user->username     = $req->username;
            $user->fullname     = $req->fullname;
            $user->password     = $req->password;
            $user->address      = $req->address;
            $user->email         = $req->email;
            $user->phone         = $req->phone;
            $user->city          = $req->city;
            $user->country       = $req->country;
            $user->role       = $req->role;
            $user->save();
            $req->session()->flash('msg', 'Registered Successfully');
            return redirect()->route('registration');
        }
        else{
            $req->session()->flash('msg', 'password and confirm password do not match');
            return redirect()->route('registration');
        }


    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller{
    public function index(){

        return view('login.index');
    }

    public function verify(UserRequest $req){

        $user = DB::table('all_user')
                ->where('password', $req->password)
                ->where('email', $req->email)
                ->get();

        if($req->email == "" || $req->password == ""){
           $req->session()->flash('msg', 'null username or password...');
           return redirect('/login');

        }
        elseif(count($user) > 0 ){
            if($user[0]->role == 'Admin'){
                $req->session()->put('email', $req->email);
                return redirect()->route('admin.home'); 
            }
            elseif($user[0]->role == 'Scout'){
                $req->session()->put('email', $req->email);
                return redirect()->route('scout.home');
            }
            elseif($user[0]->role == 'General user'){
                $req->session()->put('email', $req->email);
                return redirect()->route('general_user.home');
            }
               
        }
        else{
            $req->session()->flash('msg', 'Invalid username or password...');
            return redirect('/login');
        }
    }
}
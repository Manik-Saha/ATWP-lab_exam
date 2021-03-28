<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Requests\RegistrationRequest;
use App\Models\AllUser;


class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function profile()
    {
        $user = DB::table('all_user')
              ->where('email', session('email'))
              ->get();
        return view('admin.profile')->with('user',$user);
    }

    public function update(RegistrationRequest $req){
       $user = AllUser::find($req->user->id);
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

       $req->session()->flash('msg', 'profile uploaded Successfully');
       return redirect()->route('admin.profile');

    }
}

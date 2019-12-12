<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function index(){
		return view('login.index');
	}
	public function verify(Request $req){
		$user = User::where('username', $req->username)
					->where('password', $req->password)
					->first();
/*		$user = DB::table('users')->where('username', $req->username)
					->where('password', $req->password)
					->get();*/					
		if(count($user) > 0 ){
	
			$req->session()->put('username', $req->input('username'));
            $req->session()->put('type', $user->type);
            $req->session()->put('user', $user);
			if($user->type==1)
                return redirect()->route('admin.index');
            else return redirect()->route('customer.index');
		}else{
			$req->session()->flash('msg', 'invalid username/password');
			return redirect('/login');
		}
	}
}

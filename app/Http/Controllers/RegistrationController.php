<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Customer;
class RegistrationController extends Controller
{
    public function index()
    {
        return view('registration.index');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'username'=>'required',
            'contact'=>'required',
            'password'=>'required|min:4',
            'gender'=>'required'
        ]);
        $name=$request->name;
        $contact=$request->contact;
        $gender=$request->gender;
        $username=$request->username;
        $password=$request->password;

        $user= new User();
        $user->username=$username;
        $user->password=$password;
        $user->type=2;
    
        $customer=new Customer();
        $customer->name=$name;
        $customer->contact=$contact;
        $customer->gender=$gender;
        $customer->username=$username;
        $customer->password=$password;
        if($customer->save() && $user->save()){
            return redirect('/login');
        }
        else{
            return redirect('/registration');
        }

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\User;
class CustomerController extends Controller
{
    function index(){
        return view('customer.index');
    }

    function viewProfile(Request $req){
        $customer=Customer::where('username', $req->session()->get('username'))->first();
        return view('customer.viewprofile')->with('user', $customer);
    }

    function updateProfile(Request $req){
        $customer=Customer::where('username', $req->session()->get('username'))->first();
        //echo $customer['name']."</br>".$customer['gender'];
        return view('customer.updateprofile')->with('user', $customer);
    }

    function update(Request $req){

        $name=$req->name;
        $contact=$req->contact;
        $username=$req->username;
        $password=$req->password;
        
        $customer=Customer::where('username', $req->session()->get('username'))->first();
        $user=User::where('username', $req->session()->get('username'))->first();
        
        $userID=$user->id;
        $customerID=$customer->id;
        $customer=Customer::where('id',$customerID )->first();
        $user=User::where('id', $userID)->first();

        $customer->name=$name;
        $customer->contact=$contact;
        $customer->username=$username;
        $customer->password=$password;

        $user->username=$username;
        $user->password=$password;

        if($customer->save() &&$user->save() ){
            $req->session()->put('username', $req->input('username'));
            return redirect()->route('customer.index');
        }
        else{
            return redurect()->route('customer.updateprofile');
        }
        
    }
}

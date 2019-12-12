<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Customer;
use App\User;

class AdminController extends Controller
{
    function index(){
        return view('admin.index');
    }

    function viewProfile(){
        return view('admin.viewprofile');
    }

    function addProduct(){
        return view('admin.addproduct');
    }
    function insertProduct(Request $req){
        $req->validate([
            'name'=>'required',
            'type'=>'required',
            'price'=>'required',
            'quantity'=>'required',
            'gender'=>'required'
        ]);

        $name=$req->name;
        $type=$req->type;
        $price=$req->price;
        $quantity=$req->quantity;
        $gender=$req->gender;
    
        $product=new Product();
        $product->name=$name;
        $product->type=floatval($type);
        $product->price=(int)$price;
        $product->quantity=$quantity;
        $product->gender=$gender;

        if($product->save()){
            return redirect()->route('admin.index');
        }
        else{
            return redirect('admin.addproduct');
        }
    }
    function updateProduct(){
        $products=Product::all();
        //echo $products[0]->name;
        return view('admin.updateproduct')->with('products', $products);
    }

    function update(Request $req){
        $product=Product::where('name', $req->name)->first();
        $product->name=$req->name;
        $product->price=$req->price;
        $product->quantity=$req->quantity;
        $product->type=$req->type;
        $product->gender=$req->gender;
        if($product->save()){
            return redirect()->route('admin.index');
        }
        else{
            return redirect()->route('admin.updateproduct');
        }
    }

    function deleteProduct(){
        $products=Product::all();
        return view('admin.deleteproduct')->with('products', $products);
    }

    function delete(Request $req){
        $productName=$req->name;
        $deletedRows = Product::where('name',$productName)->delete();
        if($deletedRows )
            return view('admin.deleteproduct')->with('products', Product::all());
        else
            echo "Delete Unsuccessful!";
    }

    function deleteCustomer(){
        $customers=Customer::all();
        return view('admin.deletecustomer')->with('customers',$customers);
    }

    function deleteC(Request $req){

        $customer=Customer::where('name', $req->name)->first();
        $user=User::where('username',$customer->username)->first();
        
        $userID=$user->id;
        $customerID=$customer->id;
        $deleteUser = User::where('id',$userID)->delete();
        $deleteCustomer = Customer::where('id',$customerID)->delete();
        if($deleteUser && $deleteCustomer)
            return view('admin.deleteproduct')->with('products', Customer::all());
        else
            echo "Delete Unsuccessful!";
    }
}

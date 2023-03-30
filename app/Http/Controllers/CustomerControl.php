<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use App\Models\products;
use App\Models\details;
use Hash;

class CustomerControl extends Controller
{
    public function register(Request $request){
        $request->validate([
            'name'=> 'required|min:5|alpha',
            'email'=> 'required|email|unique:customers',
            'password'=> 'required|min:8|',
            'repassword'=> 'required_with:password|same:password',
        ]);
        $cust=new Customers();
        $cust->name=request('name');
        $cust->email=request('email');
        $cust->password=Hash::make(request('password'));
        $cust->repassword=Hash::make(request('repassword'));
        $cust->save();
        return redirect('/login');
    }
    public function submit (Request $request ){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
            
        
        ]);
        $user=Customers::where('email',Request('email'))->get();
        if(isset($user[0]->password)){
                if(Hash::check (Request('password'),$user[0]->password)){
                    session_start();
                     $user=Customers::where('name',Request('name'))->get();
                     if(isset($_SESSION['name'])){
                        redirect_to("/cart");
                     }
                    echo"successfuly";
                }else{
                    echo"password is incorrect";
                }
        }else{
            echo"signin first";
        }
        return redirect('/index');
    }

    // public function ($id)
    // {
    //     $data=products::insert($id);
    //     return view('cart',['data'=>$data]);
    // }
    public function cart( Request $request, $id){
        session_start();
       // $data = products::find ($id)->get();
      // $user=Customers::where('name',Request('name'))->get();
        $data = $request->session()->get('name');
        $data=products::where('id',Request('id'))->get();
        return view('cart',['data'=>$data]);
     }
//  public function buy (Request $request, $id)
//     {
//         $pro= details::find($id);
//         $pro->name=Request('name');
//         $pro->price=Request('price');
//         $pro->quantity=Request('quantity');
//         $pro->save();
//         return redirect("/index");
//     }



    
}

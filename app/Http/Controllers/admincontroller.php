<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admins;
use App\Models\Customers;
use App\Models\products;
use App\Models\details;
use Hash;


class admincontroller extends Controller
{
    public function admin(Request $request){
        request()->validate([
            'name'=> 'required|min:5|alpha',
            'adminid'=> 'required|unique:adminid',
            'password'=> 'required|min:8|',
            'repassword'=> 'required_with:password|same:password',
        ]);
        $em=new admins();
        $em->name=request('name');
        $em->adminid=request('adminid');
        $em->password=Hash::make(request('password'));
        $em->repassword=Hash::make(request('repassword'));
        $em->save();
        return redirect('adlogin');
    }
    public function adlog (Request $request ){
        request()->validate([
            'employid'=>'require',
            'password'=>'required'
            
        
        ]);
        $user=admins::where('adminid',Request('adminid'))->get();
        if(isset($user[0]->password)){
                if(Hash::check (Request('password'),$user[0]->password)){
                    echo"successfuly";
                }else{
                    echo"password is incorrect";
                }
        }else{
            echo"signin first";
        }
        return redirect('/adminpage');
    }
   
    // public function adminpage( Request $request, $id){
    //     session_start();
    //    // $data = products::find ($id)->get();
    //   // $user=Customers::where('name',Request('name'))->get();
    //     $data = $request->session()->get('name');
    //     $data=products::where('id',Request('id'))->get();
    //     return view('products',['data'=>$data]);
    //  }
    
    public function adminpage( Request $request){
        $data=products::all();
        return view('adminpage',['data'=>$data]);
      }

      public function edit($id)
      {
          $data=products::find($id);
          return view('adminpage',['data'=>$data]);
      }
}

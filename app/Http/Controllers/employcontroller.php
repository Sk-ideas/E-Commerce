<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employs;
use Hash;
class employcontroller extends Controller
{
    public function employ(Request $request){
        request()->validate([
            'name'=> 'required|min:5|alpha',
            'employid'=> 'required|unique:employid',
            'password'=> 'required|min:8|',
            'repassword'=> 'required_with:password|same:password',
        ]);
        $em=new employs();
        $em->name=request('name');
        $em->employid=request('employid');
        $em->password=Hash::make(request('password'));
        $em->repassword=Hash::make(request('repassword'));
        $em->save();
        return redirect('emlogin');
    }
    public function know (Request $request ){
        request()->validate([
            'employid'=>'require',
            'password'=>'required'
            
        
        ]);
        $user=employs::where('employid',Request('employid'))->get();
        if(isset($user[0]->password)){
                if(Hash::check (Request('password'),$user[0]->password)){
                    echo"successfuly";
                }else{
                    echo"password is incorrect";
                }
        }else{
            echo"signin first";
        }
        return redirect('/index');
    }
    
}

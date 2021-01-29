<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_Profile;

class UserProfileController extends Controller
{
    public function CheckLogin(Request $request)
    {
        
        $username = $request->username;
        $password = $request->password;
        
        
        if( $username == null ||  $password == null ){
            return response(['success'=>'Email or Password is blank','result'=>0]);
        }
        
        else{
           
            $user = User_Profile::where([['username','=', $username], ['password','=', $password]])->get();
            
            if(count($user) > 0){
                 return response(['success'=>'Login successfully!', 'result'=>1]);
            }
            
            else{
                
                return response(['success'=>'Email or Password is not correct!', 'result'=>0]);
            }
            
        }
    }
    
   
}

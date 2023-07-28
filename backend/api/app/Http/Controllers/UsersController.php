<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersModel;

class UsersController extends Controller
{

    function getUsers(){
        $users = UsersModel::all();
        return response()->json(
            [
                'status'=>200, 
                'success'=>true, 
                'data'=>$users]
        );
    }

    function login(Request $request){
        if($request->email && $request->password){
            $user = UsersModel::where('email', $request->email)->first();
            if($request->password === $user->password){
                return response()->json(
                [
                    'status'=>200, 
                    'success'=>true, 
                    'data'=>"Logged in."]
                );
            }
        }
        else{
            return response()->json(
                [
                    'status'=>200, 
                    'success'=>false, 
                    'data'=>"Email or Password is empty."]
            );
        }
    }

    function register(Request $request){
        if($request->email && $request->password){
            $user = UsersModel::where('email', $request->email)->first();
            if(!$user){
                $new_user = new UsersModel;
                $new_user->email = $request->email;
                $new_user->password = $request->password;
                if($new_user->save()){
                    return response()->json(
                    [
                        'status'=>200, 
                        'success'=>true, 
                        'data'=>$new_user]
                    );
                }
            }
            else{
                return response()->json(
                [
                    'status'=>200, 
                    'success'=>false, 
                    'data'=>"This email is already registered."]
                );   
            }
        }
        else{
            return response()->json(
                [
                    'status'=>200, 
                    'success'=>false, 
                    'data'=>"Email or Password is empty."]
            );
        }
    }
}

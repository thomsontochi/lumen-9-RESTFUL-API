<?php 

namespace App\Http\Controllers;

class UserController extends Controller{


    public function createUser(Request $request){
        $user = User::create($request->all());
        return response()->json($user);
        }
}
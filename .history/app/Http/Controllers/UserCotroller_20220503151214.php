<?php 

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller{


    public function createUser(Request $request){
            $user = User::create($request->all());
            return response()->json($user);
    }

    
}
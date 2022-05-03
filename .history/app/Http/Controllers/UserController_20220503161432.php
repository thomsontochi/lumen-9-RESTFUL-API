<?php 

/************************************
 ** File: Book Controller file  ******
 ** Date: 3th may 2022  ************
 ** Book Controller file  ************
 ** Author: Asefon pelumi M. *********
 ** Senior Software Developer ********
 * Email: pelumiasefon@gmail.com  ***
 * **********************************/

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller{


    public function index(){
        $user =User::all();
        return response()->json($user);
    }

    public function createUser(Request $request){
            $user = User::create($request->all());
            return response()->json($user);
    }

    public function updateUser(Request $request, $id){
        $user = User::find($id);
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email_address = $request->input('email_address');
        $user->save();
        return response()->json($user);
    }

    public function viewUser($id){
        $user = User::find($id);
        return response()->json($user);
     }



    public function deleteUser($id){
        $user = User::find($id);
        $user->delete();
        return response()->json('Removed successfully');
    }

    



































}
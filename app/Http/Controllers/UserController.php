<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class UserController extends Controller
{
   function register(Request $request)
   {

       $user = new User();
       $user->name= $request->name;
       $user->email =$request->email;
       $user->password = Hash::make($request->password);
       $user->save();
   }

   function users()
   {
       $users = User::all();
       return $users;
   }
   function deleteUser($id)
   {
        User::destroy($id);
       return "Deleted successfully";
   }
   function searchById($id)
   {
       $user =  User::find($id);
        return $user;
   }
   
}

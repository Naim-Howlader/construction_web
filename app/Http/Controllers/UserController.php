<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function usersView(){
        $users = User::latest()->get();
        $data = compact('users');
        return view('user')->with($data);
    }
    public function destroy($id){
        $user = User::find($id);
        if(empty($user)){
            return redirect()->route('users');
        }
        $user->delete();
        return redirect()->route('users');
    }
}

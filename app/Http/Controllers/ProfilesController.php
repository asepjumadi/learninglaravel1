<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user){
       $user = User::findOrFail($user);
    //    if($user instanceof ModelNotFoundException){
    //        return response()->json([
    //            'message'=> 'Record not Found 404',
    //        ],404);
    //    }else{
    //     return view('home',[
    //         'user'=>$user,
    //     ]);
    //    }
       return view('profiles.index',[
        'user'=>$user,
    ]);
    }
}

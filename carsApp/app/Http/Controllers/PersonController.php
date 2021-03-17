<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PersonController extends Controller
{
    //
    
    /* REST API */

    public function show(User $user){
        return $user;
    }

    public function index(){
        return User::paginate();
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'

        ]);

        $user = User::create($request->all());

        return $request;
    }

    public function update(User $user, Request $request){

        $user->update($request->all());

        return $user;
    }

    public function destroy(User $user){

        $user->delete();
        return response()->json();
    }

}

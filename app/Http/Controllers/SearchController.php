<?php

namespace App\Http\Controllers;

use App\Models\AddUserToken;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {

        $search = $request->get('search');
        $users = User::where('email','LIKE','%'.$search.'%')->paginate(2);

        return view('alluser',['users' => $users]);


    }

}

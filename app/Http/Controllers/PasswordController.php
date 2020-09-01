<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\MatchOldPassword;
use Hash;
use Auth;
use Session;

class PasswordController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('updatepass');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function changePassword(Request $request)
    {


        $this->validate($request, [
            'oldpassword' => 'required',
            'password' => 'required|confirmed',

        ]);

        //Change Password
        $user = Auth::User()->password;
        if (Hash::check($request->oldpassword, $user)) {
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect()->route('change.password')->with(['success' => true, 'message' => 'Password change successfull']);


        } else {
            return  redirect()->route('change.password')->with(['error' => true, 'message' => 'Current password is invalid']);

        }


    }

}

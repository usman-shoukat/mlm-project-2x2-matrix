<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\AddUserToken;
use App\Models\User;
use App\Models\UserReferral;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
class UserController extends Controller
{
    public $addUserTokenModel;
    public $userModel;

    public function __construct()
    {
        $this->addUserTokenModel = new AddUserToken();
        $this->userModel = new User();
    }

    /**
     * @return Factory|View
     */
    public function create()
    {
        return view('create-user', $this->data);
    }

    /**
     * @param UserRequest $request
     * @return RedirectResponse
     */
    public function store(UserRequest $request)
    {
        $userReferrals = UserReferral::where(['referred_by_id' => auth()->user()->id])->get();
        if ($userReferrals->count() == 2) {
            return redirect()->route('user.create')->with(['error' => true, 'message' => 'You already have added two members']);
        }

        $this->data['user'] = auth()->user();
        $userToken = $this->addUserTokenModel->where(['token' => $request->input('token'), 'is_expired' => false, 'user_id' => $this->data['user']->id])->first();



        if ($userToken) {
            $userData = [
                "name" => $request->input('name'),
                "email" => $request->input('email'),
                "password" => Hash::make($request->input('password')),
                "mobile" => $request->input('mobile'),

            ];

            $createdUser = $this->userModel->create($userData);

    if ($userReferrals->count() == 1) {

      $persontage = 20/100*24800;

      User::where('id', auth()->user()->id)->update(['balance' => $persontage]);

    }


            if ($userReferrals->count() == 0) {
                UserReferral::create(['user_id' => $createdUser->id, 'referred_by_id' => auth()->user()->id, 'position' => 'right']);
            } elseif ($userReferrals->count() == 1) {
                UserReferral::create(['user_id' => $createdUser->id, 'referred_by_id' => auth()->user()->id, 'position' => 'left']);
            }






            $userToken->is_expired = 1;
            $userToken->save();
            return redirect()->route('user.create')->with(['success' => true, 'message' => 'User has been added successfully']);
        }

        return redirect()->route('user.create')->with(['error' => true, 'message' => 'Please provide a valid token to continue.']);
    }
    public function addblns(Request $request,$id)
    {

       $balance =User::find($id);
        $balance->balance=$request->balance;
        $balance->save();
        return redirect()->route('all.user')->with(['success' => true, 'message' => 'Balance has been added successfully']);
    }


}

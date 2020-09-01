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

class TokenController extends Controller
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
        return view('addtoken', $this->data);
    }

    /**
* @param TokenRequest Request
* @return RedirectResponse
*/
    public function store()
    {

        $device = new AddUserToken();

        $device->user_id = request('user_id');

        $device->token = request('token');
        $device->name = request('name');
        $device->email = request('email');

        $device->save();

        return redirect()->route('token.create')->with(['success' => true, 'message' => 'Token has been added successfully']);


    }
    public function alluser()
    {
        $users = $this->userModel->paginate(20);


        return view('alluser', ['users' => $users]);
    }


}

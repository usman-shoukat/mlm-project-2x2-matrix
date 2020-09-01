<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\AddUserToken;
use App\Models\User;
use App\Helpers\UserHelper;
use App\Models\UserReferral;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public $userHelper;



    public function __construct()
    {
        $this->middleware('auth');
        $this->userHelper = new UserHelper();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $this->userHelper->userTotalMemebers(auth()->user());

        if (auth()->user()->referrals->count() > 0) {
                foreach (auth()->user()->referrals as $referral){
                    $this->userHelper->userMembers($referral->user, $referral->position);
                }
            }

     $this->data['userTotalMembers'] = $this->userHelper->userTotalMembers;
     $this->data['userTotalLeftMembers'] = $this->userHelper->userTotalLeftMembers;
     $this->data['userTotalRightMembers'] = $this->userHelper->userTotalRightMembers;

        return view('home',$this->data);
    }

    public function upliner(){
        return view('upliner',$this->data);
    }
    public function reward(){
        return view('reward');
    }
    public function wallet(){

    return view('wallet');
}

}

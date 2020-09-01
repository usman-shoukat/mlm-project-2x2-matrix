<?php


namespace App\Helpers;


class UserHelper
{
    public $userTotalMembers;
    public $userTotalLeftMembers;
    public $userTotalRightMembers;

    public function __construct()
    {
        $this->userTotalMembers = 0;
        $this->userTotalLeftMembers=0;
        $this->userTotalRightMembers=0;
    }

    /**
     * @param $user
     * @return array|string
     * @throws \Throwable
     */
    public static function treeMemberULHelper($user)
    {
        return view('partials.members-ul',['user'=>$user])->render();
    }

    /**
     * @param $user
     * @return array|string
     * @throws \Throwable
     */
    public static function treeMemberLIHelper($user)
    {
        return view('partials.members-li',['user'=>$user])->render();
    }

    /**
     * @param $user
     */
    public  function userTotalMemebers($user){
        if ($user->referrals->count() > 0){
            foreach ($user->referrals as $referral){
                $this->userTotalMembers += 1;
                $this->userTotalMemebers($referral->user);
            }
        }
    }

    /**
     * @param $user
     * @param $side
     */
    public function userMembers($user,$side){
        if ($side == 'left'){
            $this->userTotalLeftMembers +=1;
        }
        if ($side == 'right'){
            $this->userTotalRightMembers += 1;
        }

        if ($user->referrals->count() > 0){
            foreach ($user->referrals as $referral){
                $this->userMembers($referral->user,$side);
            }
        }
    }

}

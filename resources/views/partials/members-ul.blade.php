
<ul>
    @foreach($user->referrals as $userReferral)
    {!! \App\Helpers\UserHelper::treeMemberLIHelper($userReferral->user) !!}
        @endforeach
</ul>

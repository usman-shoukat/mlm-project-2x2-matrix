
<li>
    <a href="javascript:void(0);">
        <div class="member-view-box">
            <div class="member-image">
                <img src="{{ asset('\images\avatar.png')}}" style=" vertical-align: middle; width: 50px; height: 50px;border-radius: 50%;">
                    <div class="member-details">
                        <h6>        {{ $user->name }}<br>{{ $user->referrals->count() }}
                        </h6>
                    </div>
            </div>
        </div>
    </a>
    @if($user->referrals->count() > 0)
        {!! \App\Helpers\UserHelper::treeMemberULHelper($user) !!}
    @endif
</li>

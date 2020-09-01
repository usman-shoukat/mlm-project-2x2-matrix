<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'mobile'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function adminlte_image()
    {
        return '/images/xlogo.png';
    }

    public function adminlte_desc()
    {
        return 'Welcome';
    }

    public function adminlte_profile_url()
    {
        return 'profile/username';
    }

    public function referrals(){
        return $this->hasMany(UserReferral::class, 'referred_by_id');
    }
    public static function scopeSearch($query, $searchTerm)
    {
        return $query->where('email', 'like', '%' .$searchTerm. '%')
            ->orWhere('id', 'like', '%' .$searchTerm. '%');
    }

}

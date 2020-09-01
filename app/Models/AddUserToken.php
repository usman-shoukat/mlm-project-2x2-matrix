<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AddUserToken extends Model
{
    protected $fillable = ['user_id',"token","name","email"];


    public function user()
    {
        return $this->hasMany(User::class);
    }

}

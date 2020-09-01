<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserReferral extends Model
{
    protected $fillable = ['user_id', 'referred_by_id', 'position'];

    /**
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }




    /**
     * @return BelongsTo
     */
    public function referredByUser()
    {
        return $this->belongsTo(User::class, 'referred_by_id');
    }


}

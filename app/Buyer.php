<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class Buyer extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'buyerName', 'buyerEmail', 'password',
    ];

    protected $hidden = [
        'password',
    ];

    protected $primaryKey = 'buyerID';

    public function findForPassport($username)
    {
        return $this->where('buyerEmail', $username)->first();
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'buyer', 'buyerID');
    }
}

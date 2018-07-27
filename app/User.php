<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
        'username', 'email', 'password', 'phone', 'address',
    ];
    public $timestamps = true;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','status',
    ];

    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }

    public function order()
    {
        return$this->hasManyThrough(Order::class, Transaction::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function rate()
    {
        return $this->hasMany(Rate::class);
    }
}

<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\App;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'firstname',
        'lastname',
        'email',
        'password',
        'genre',
        'image_name',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $table = 'users';


    public function getFullName()
    {
        return $this->firstname . ' ' . $this->lastname;
    }


    public function friends()
    {
        return $this->belongsToMany(User::class, 'friends_users', 'user_id', 'friend_id');
    }

    public function addFriend($user)
    {
        $this->friends()->attach($user->id);
    }

    public function removeFriend($user)
    {
        $this->friends()->detach($user->id);
    }

}

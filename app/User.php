<?php

namespace App;

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
        'name', 'email', 'password',
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

    public function defines() {
        return $this->hasMany('App\Define');
    }

    public function favorites()
    {
        return $this->belongsToMany(Define::class, 'define_user', 'user_id', 'define_id')->withTimestamps();
    }

    public function favorite($defineId)
    {
        $exist = $this->is_favorite($defineId);

        if($exist){
            return false;
        }else{
            $this->favorites()->attach($defineId);
            return true;
        }
    }

    public function unfavorite($defineId)
    {
        $exist = $this->is_favorite($defineId);

        if($exist){
            $this->favorites()->detach($defineId);
            return true;
        }else{
            return false;
        }
    }

    public function is_favorite($defineId)
    {
        return $this->favorites()->where('define_id',$defineId)->exists();
    }
}

<?php

namespace App;

use Cartalyst\Sentinel\Hashing\BcryptHasher;
use Cartalyst\Sentinel\Users\EloquentUser;

/**
 * App\User
 *
 * @property integer $id
 * @property string $email
 * @property string $password
 * @property string $permissions
 * @property string $last_login
 * @property string $first_name
 * @property string $last_name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePermissions($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereLastLogin($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereFirstName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereLastName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class User extends EloquentUser
{
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

    public function setTherolesAttribute($roles)
    {
        $this->theroles()->detach();
        if (!$roles) return;
        if (!$this->exists) $this->save();
        $this->theroles()->attach($roles);
    }

    public function theroles()
    {
        return $this->belongsToMany('App\Role', 'role_users', 'user_id', 'role_id');
    }

    public function getTherolesAttribute($roles)
    {
        return array_pluck($this->theroles()->get(['id'])->toArray(), 'id');
    }

    public function getPasswordAttribute($password)
    {
        return "";
    }

    public function setPasswordAttribute($password)
    {
        if (!empty($password)) {
            $hasher = new BcryptHasher();
            $password = $hasher->hash($password);
            $this->attributes['password'] = $password;
        }
    }

}

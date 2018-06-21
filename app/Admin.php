<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    //defines admin guard
    protected $guard = 'admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
////////////////////////////////////////////////
    /**
    * Get the unique identifier for the user.
    *
    * @return mixed
    */
    public function getAuthIdentifier()
    {
      return $this->getKey();
    }

    /**
    * Get the password for the user.
    *
    * @return string
    */
    public function getAuthPassword()
    {
      return $this->password;
    }
    /**
    * Get the e-mail address where password reminders are sent.
    *
    * @return string
    */
    public function getReminderEmail()
    {
      return $this->email;
    }

}

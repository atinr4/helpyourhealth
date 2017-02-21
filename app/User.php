<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'fullname', 'email', 'password', 'sex', 'age', 'contact_no',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'password', 'remember_token',
  ];

  public function userInfo()
  {
    return $this->hasMany('App\UserHealthInfo', 'user_id', 'id');
  }
}

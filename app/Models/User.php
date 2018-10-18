<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected  $table = 'users';

    protected $dates = [
        'created_at', 'updated_at'
    ];

    protected $fillable = [
      'email', 'name', 'password'
    ];

    protected $hidden = [
        'password', 'created_at', 'updated_at'
    ];

    public function setPassword($password) {
        $this->update([
           'password' => password_hash($password, PASSWORD_DEFAULT)
        ]);
    }
}

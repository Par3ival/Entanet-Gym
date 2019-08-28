<?php

namespace App; // Used for the class

use Illuminate\Database\Eloquent\Model;

class Member extends model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 'lname', 'email', 'address', 'dob', 'tp', 'membership'
    ];

}

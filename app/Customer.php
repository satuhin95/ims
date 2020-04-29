<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
      protected $fillable = [
        'name', 'email', 'contact','address', 'picture', 'shopname','acount_name', 'acount_number','banck_name', 'banck_branch',
    ];
}

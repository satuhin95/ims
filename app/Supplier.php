<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
      protected $fillable = [
        'name', 'email', 'contact','address', 'shop','type','acount_name', 'acount_number','banck_name', 'banck_branch',
    ];

}

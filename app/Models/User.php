<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

    class User extends Model
    {
        use HasFactory;

        public $timestamps = false;
        protected $fillable = [
            'FullName',
            'Username',
            'Email',
            'Password'
        ];

        /*
        public function manufacturers()
        {
            return $this->hasMany(Manufacturer::class);
        }
        */
    }

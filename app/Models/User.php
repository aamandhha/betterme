<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

    class User extends Model
    {
        use HasFactory;

        public $timestamps = false;

        protected $primaryKey = 'User_ID';

        protected $fillable = [
            'User_ID',
            'FullName',
            'Username',
            'Email',
            'Password',
            'Avatar',
            'Status',
            'Language'
        ];

        /*
        public function manufacturers()
        {
            return $this->hasMany(Manufacturer::class);
        }
        */
    }

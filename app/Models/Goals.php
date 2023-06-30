<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

    class Goals extends Model
    {
        use HasFactory;

        public $timestamps = false;

        protected $primaryKey = 'Goal_ID';

        protected $fillable = [
            'Goal_ID',
            'DaysNow',
            'DaysEnd'
        ];

        public function habbit()
        {
            return $this->hasOne(Habbit::class);
        }
    }

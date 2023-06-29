<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

    class Progress extends Model
    {
        use HasFactory;

        public $timestamps = false;

        protected $primaryKey = 'Progress_ID';

        protected $fillable = [
            'Progress_ID',
            'Day_1',
            'Day_2',
            'Day_3',
            'Day_4',
            'Day_5',
            'Day_6',
            'Day_7',
            'Day_8',
            'Day_9',
            'Day_10',
            'Day_11',
            'Day_12',
            'Day_13',
            'Day_14',
            'Day_15',
            'Day_16',
            'Day_17',
            'Day_18',
            'Day_19',
            'Day_20',
            'Day_21',
            'Day_22',
            'Day_23',
            'Day_24',
            'Day_25',
            'Day_26',
            'Day_27',
            'Day_28',
            'Day_29',
            'Day_30'
        ];

        public function habbit()
        {
            return $this->hasOne(Habbit::class);
        }
    }

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

    class Habbit extends Model
    {
        use HasFactory;

        public $timestamps = false;

        protected $primaryKey = 'Habbit_ID';

        protected $fillable = [
            'Habbit_ID',
            'HabbitName',
            'Year',
            'Month',
            'Owner_FK',
            'Progress_FK',
            'Goal_FK'
        ];

        public function progress()
        {
            return $this->hasOne(Progress::class);
        }
    }

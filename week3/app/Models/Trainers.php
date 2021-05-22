<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class trainers extends Model
{
    protected $table = 'trainers';

    public function company()
    {
        return $this->hasOne('App\Models\Companies', 'company_id', 'company_id');
    }
}
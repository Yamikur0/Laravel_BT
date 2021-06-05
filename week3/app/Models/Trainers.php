<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Trainers extends Model
{
    use SoftDeletes;
    protected $table = 'trainers';

    public function company()
    {
        return $this->hasOne('App\Models\Companies', 'company_id', 'company_id');
    }
}
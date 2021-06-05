<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    use SoftDeletes;
    protected $table = 'companies';

    public function trainer()
    {
        return $this->hasOne('App\Models\Trainers', 'company_id', 'company_id');
    }
}
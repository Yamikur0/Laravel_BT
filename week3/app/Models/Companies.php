<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class companies extends Model
{
    protected $table = 'companies';

    public function trainer()
    {
        return $this->hasOne('App\Models\Trainers', 'company_id', 'company_id');
    }
}
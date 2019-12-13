<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacancies extends Model
{
    protected $fillable = [
        'name_company',
        'address',
        'office',
        'linkedin'
    ];
}

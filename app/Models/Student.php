<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Student extends Model
{
    // 主表要連結子表，用HasOne
    public function phone(): HasOne
    {
        return $this->hasOne(Phone::class);
    }
}

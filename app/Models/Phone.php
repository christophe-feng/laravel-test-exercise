<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Phone extends Model
{
    // 子表要關聯到主表，用BelongsTo
    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
}

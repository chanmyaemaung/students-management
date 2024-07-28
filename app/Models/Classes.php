<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Classes extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function sections(): HasMany
    {
        return $this->hasMany(\App\Models\Section::class, 'class_id');
    }

    public function students(): HasMany
    {
        return $this->hasMany(\App\Models\Student::class, 'class_id');
    }
}

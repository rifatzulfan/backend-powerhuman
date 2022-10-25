<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'company_id',
    ];

    public function responsibilities()
    {
        return $this->hasMany(Responsibility::class);
    }

    public function employess()
    {
        return $this->hasMany(Employee::class);
    }
}

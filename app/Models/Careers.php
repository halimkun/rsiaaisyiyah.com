<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Careers extends Model
{
    use HasFactory;

    // cast deadline before is date to datetime
    protected $casts = [
        'deadline' => 'datetime',
    ];

    // fillable fields
    protected $fillable = [
        'name',
        'description',
        'type',
        'education',
        'major',
        'salary_min',
        'deadline',
        'apply_url',
        'active',
    ];

    // function to update active status if deadline is passed
    public function updateActiveStatus() {
        if ($this->deadline < now()) {
            $this->active = 0;
            $this->save();
        }
    }
}

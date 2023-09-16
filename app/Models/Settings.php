<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;

    protected $table = 'settings';

    protected $fillable = [
        'key',
        'value'
    ];

    public static function find($key)
    {
        $setting = new \App\Models\Settings;
        $data = $setting->where('key', $key)->first();
        return $data ? $data->value : null;
    }
}

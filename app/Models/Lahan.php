<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Lahan extends Model
{
    protected $keyType = 'string';
    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->id)) {
                $model->id = (string) Str::uuid();
            }
        });
    }

    protected $table = 'farmland';

    protected $fillable = [
        'pemilik',
        'nama_lahan',
        'lokasi',
        'luas',
        'tgl_mulai_tanam',
        'foto',
    ];
}

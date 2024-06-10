<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{
    protected $table = 'cuaca';
    protected $fillable = [
        'Tanggal',
        'NamaKota',
        'KondisiCuaca',
        'Suhu',
        'Kelembaban',
        'KecepatanAngin'
    ];
}

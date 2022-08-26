<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class products extends Model
{
    use HasFactory;
    use Notifiable;
    protected $filabale=[

        'name','details'

    ];
    protected $table='products';
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galleries extends Model
{
    use HasFactory;
    protected $table = 'galleries';

    protected $primaryKey = 'id_galleries';

    protected $fillable = [
        'label',
        'size',
        'extension',
        'images',
    ];
}

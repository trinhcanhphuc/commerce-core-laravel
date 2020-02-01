<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    const CONFIG_KEYS = [
        'HOME_VIDEO' => 'HOME_VIDEO',
        'INDIEGOGO' => 'INDIEGOGO',
        'INDIEGOGO_PAGE' => 'INDIEGOGO_PAGE'
    ];
}

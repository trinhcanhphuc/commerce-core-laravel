<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    const CONSTANTS = [
        'INDIEGOGO' => 'INDIEGOGO',
        'DELIVERY_INFORMATION' => 'DELIVERY_INFORMATION',
        'PRIVACY_POLICY' => 'PRIVACY_POLICY',
        'TERM_AND_CONDITION' => 'TERM_AND_CONDITION'
    ];
}

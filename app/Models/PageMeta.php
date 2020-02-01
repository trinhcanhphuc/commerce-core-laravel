<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageMeta extends Model
{
    const CONSTANTS = [
        'TITLE' => 'TITLE',
        'VIDEO' => 'VIDEO',
        'DETAIL' => 'DETAIL',
        'IMAGE' => 'IMAGE',
        'DESCRIPTION' => 'DESCRIPTION',
        'RATINGS' => 'RATINGS',
        'FACEBOOK' => 'FACEBOOK',
        'YOUTUBE' => 'YOUTUBE'
    ];
}

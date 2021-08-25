<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userLevel extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userLevel',
        'userExp',
        'userMoney',
        'userLastMissionId',
        'userLastDialogId',
        'lastSave',
    ];
}

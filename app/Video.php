<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'video_user';
    protected $fillable = ['url','user_id'];
}

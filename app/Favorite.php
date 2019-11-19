<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
  protected $table = 'favorite';
  protected $fillable = ['user_id','business_id'];
}

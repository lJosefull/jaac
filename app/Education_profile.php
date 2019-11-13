<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education_profile extends Model
{
  protected $table = 'education_types';
  protected $fillable = ['name','education_id'];
  public $timestamps = true;

}

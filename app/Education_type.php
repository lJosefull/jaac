<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education_type extends Model
{
    protected $table = 'education_type';
    protected $fillable = ['name','education_id'];
    public $timestamps = true;

public function User(){
    return $this->hasMany('App\User');

  }
}


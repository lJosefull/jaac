<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
 protected $table = 'education';
//   protected $fillable = ['name','category_id','subcategories_id','sub_subcategories_id','type_pro','price','discount','description','details','id','like','count_shop'];
//   public $timestamps = true;
  protected $fillable = ['name','id'];

public function User(){
      return $this->hasMany('App\User');

    }
}
// public function category(){
//     return $this->belongsTo('App\category');

// }
//  public function sub_category(){
//   return $this->belongsTo('App\sub_category');

// }
//  public function like(){
//   return $this->hasMany('App\like');

// }


<?php

namespace App\Models;


use Illuminate\Support\Str;
use App\Model\ParkActivity;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
  protected $fillable = [
    'name'
  ];

  public function parkActivities()
  {
    return $this->hasMany(ParkActivity::class);
  }
  protected static function booted(){
    static::creating(function ($activity){
        $activity->slug = $activity->generateUniqueSlug($activity->name);
    });
   }

   private function generateUniqueSlug($name)
   {
      $slug = Str::slug($name);


      $coun = Activity::where('slug', "like", $slug . "%")->count();

      if ($count) {
        $slug = $slug ."-" .($count+1);
      }
      return $slug;
   }

}

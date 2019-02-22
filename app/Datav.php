<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datav extends Model
{

  protected $guarded = ['id'];

  public static function persist()
   {
       $instance = (new static)->fill([
           'visualtrainingdate'=> request()->visualtrainingdate,
       ]);

       $instance->save();

       return $instance;

    }

    public function test()
   {

   }
}

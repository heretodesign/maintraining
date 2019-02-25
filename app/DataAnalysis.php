<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataAnalysis extends Model
{
        //dataanalysis
    protected $guarded = ['id'];

  public static function persist()
   {
       $instance = (new static)->fill([
           'dataanalysis'=> request()->dataanalysis,
       ]);

       $instance->save();

       return $instance;

    }

    public function test()
   {

   }
}

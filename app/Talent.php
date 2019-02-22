<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
     protected $guarded = ['id'];

   public static function persist()
   {
       $instance = (new static)->fill([
           'talent'=> request()->talent,
       ]);

       $instance->save();

       return $instance;
     // return redirect('/home')->with('response', 'Register Successfully');

    }

    public function test()
   {

   }
}

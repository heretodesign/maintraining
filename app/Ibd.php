<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ibd extends Model
{
    protected $guarded = ['id'];

   public static function persist()
   {
       $instance = (new static)->fill([
           'ibd'=> request()->ibd,
       ]);

       $instance->save();

       return $instance;
     // return redirect('/home')->with('response', 'Register Successfully');

    }

    public function test()
   {

   }
}

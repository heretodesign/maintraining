<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
   
   protected $guarded = ['id'];

   public static function persist()
   {
       $instance = (new static)->fill([
           'firstname'=> request()->firstname,
           'lastname'=> request()->lastname,
           'jobtitle'=> request()->jobtitle,
           'department'=> request()->department,
           'email'=> request()->email,
           'message'=> request()->message,
       ]);

       $instance->save();

       return $instance;
     // return redirect('/home')->with('response', 'Register Successfully');

    }

    public function test()
   {

   }
}

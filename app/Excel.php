<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Excel extends Model
{
    //
   //  protected $guarded = ['id'];

   // public static function persist()
   // {
   //     $instance = (new static)->fill([
   //         'name'=> request()->name,
   //         'email'=> request()->email,
   //         'message'=> request()->message,
   //     ]);

       
   //     $instance->save();

   //     return $instance;

   //  }

   //  public function updateMe($attributes)
   //  {
   //      if (array_has($attributes, 'name')) {
   //          $this->name = array_get($attributes,'name'); 
   //      }

   //      if (array_has($attributes, 'email')) {
   //          $this->email = array_get($attributes,'email'); 
   //      }

   //      if (array_has($attributes, 'message')) {
   //          $this->message = array_get($attributes,'message'); 
   //      }
        
   //      // add the other fields

   //      $this->save(); 
   //  }


   protected $guarded = ['id'];

   public static function persist()
   {
       $instance = (new static)->fill([
           'exceltrainingdate'=> request()->exceltrainingdate,
       ]);

       $instance->save();

       return $instance;
     // return redirect('/home')->with('response', 'Register Successfully');

    }

    public function test()
   {

   }
}

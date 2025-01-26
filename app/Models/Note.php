<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $guarded = [];

   public static function getList($id)
   {
    return DB::select('CALL Note_SP_GetList(?)',[$id]);
   }
   public static function get($id)
   {
    return DB::select('CALL Note_SP_Get(?)',[ $id]);
   }
   public static function add($user_id,$subject,$content,$date,&$errNo)
   {
    return DB::statement('CALL Note_SP_Add(?,?,?,?,?)',[ $user_id,$subject,$content,$date,$errNo]);
   }

}

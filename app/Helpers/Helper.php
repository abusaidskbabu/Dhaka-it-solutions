<?php

namespace App\Helpers;
use DB;
use Illuminate\Database\Eloquent\Model;

class Helper{

    static function get_user_by_id($userid){
        $user = DB::table('tb_users')->where('id', $userid)->first();
        if($user){
            return  $user;
        }else{
            return null;
        }
    }
}
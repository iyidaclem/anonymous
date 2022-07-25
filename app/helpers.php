<?php
use App\Models\User;


function userId(){
    // $id = 0;
   do{
    $id =  mt_rand(1, 9999999999);
    $user = User::where('user_id',$id)->get();
   }while(count($user)>0);

   return $id;
}















?>
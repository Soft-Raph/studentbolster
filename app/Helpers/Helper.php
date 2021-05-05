<?php
namespace App\Helpers;
use Illuminate\Support\Str;

class Helper
{
    public static function IDGenerator($model, $trow, $length = 4, $prefix){
//        $data = $model::orderBy('id','desc')->first();
//        if(!$data){
//            $og_length = $length;
//            $last_number = '';
//        }else{
//            $code = substr($data->$trow, strlen($prefix)+1);
//            $actial_last_number = ($code/1)*1;
//            $increment_last_number = ((int)$actial_last_number)+6;
//            $last_number_length = strlen($increment_last_number);
//            $og_length = $length - $last_number_length;
//            $last_number = $increment_last_number;
//        }
//        $zeros = "";
//        for($i=0;$i<$og_length;$i++){
//            $zeros.="0";
//        }
        return $prefix.'-'.rand(1,1000000);
    }
   public static function canInvest(){

       $trans = auth()->user()->transactions->where('type', 'Investment')->last();
        if (is_null($trans)){
            return true;
        }
       $start_date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$trans->created_at);
       $end_date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', date("Y-m-d H:i:s"));
       $different_days = $start_date->diffInDays($end_date);
       if ( $different_days > 14){
           return true;
       }
       return false;
   }
    
        public static function claimInvest(){

        $trans = auth()->user()->transactions->where('type', 'Investment')->last();
        if (is_null($trans)){
            return true;
        }
        $start_date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$trans->created_at);
        $end_date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', date("Y-m-d H:i:s"));
        $different_days = $start_date->diffInDays($end_date);
        if ( $different_days = 14){

            return true;
        }

        return false;
    }

}


?>

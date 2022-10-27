<?php 
/**
 * Class qui permet
 */
class  Text{

private static $suffix = " €";
const SUFFIX = " €";

    public static function PublicWithZero(int $num){
       return self::WithZero($num);
        
    }

    private static function WithZero(int $num){
        if($num < 10){
            return '0'.$num.self::$suffix;
        }
        else {
            return $num.self::SUFFIX;
        }
        
    }

}

?>
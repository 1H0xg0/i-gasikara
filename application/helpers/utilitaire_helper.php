<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * fonction permettant de generer une liste de $number dimension a partir de la liste $liste
 */
 if ( ! function_exists('getArray'))
 {
 	 function getArray($liste, $number)
 	 {
 		  $res = array();
 		  for(; ;){
 		  	$n = array_rand($liste, 1);
 		  	if(!in_array($liste[$n], $res)) $res[] = $liste[$n];
 		  	if(count($res) == $number) return $res;  
 		  }
 	 }

 }

 /**
 * fonction permettant de generer une liste de $number dimension a partir de la liste $liste
 */
 if ( ! function_exists('getManyArray'))
 {
 	 function getManyArray($liste, $size, $number)
 	 {
 		  $res = array();
 		  for($i = 0; $i < $number; $i++){
	 		  for(; ;){
	 		  	$n = array_rand($liste, 1);
	 		  	if(!in_array($liste[$n], $res)){
	 		  		$res[$i][] = $liste[$n];
	 		  		unset($liste[$n]);
	 		  	}
	 		  	if(count($res[$i]) == $size) break;  
	 		  }
 		  }
 		  return $res;
 	 }

 }


 if ( ! function_exists('getKey'))
 {
 	 function getKey($liste, $number)
 	 {
 		  foreach($liste as $key => $value){
 		  	if(in_array($number, $value)) return $key;
 		  }
 		  
 	 }

 }


if ( ! function_exists('setMur'))
{
    function set_mur($mur, $c){
        foreach($mur as $coord){
            if( ($coord['x'] == $c['x']) && ($coord['y'] == $c['y']) ) return true;
        }
        return false;
    }

}


if ( ! function_exists('getScore'))
{
    function getScore($score){

        $ar = explode(':', $score);
        if(count($ar) > 1){
            $res = array();
            foreach ($ar as $item){
                $res[] = intval($item);
            }
            return $res;
        }else{
            return intval($ar[0]);
        }
        return null;
    }

}


if ( ! function_exists('compareScore'))
{
    function compareScore($score1, $score2){

        if(is_array($score1) && (count($score1) > 1)){

            $t1 = strtotime($score1[0].':'.$score1[1].':'.$score1[2]);
            $t2 = strtotime($score2[0].':'.$score2[1].':'.$score2[2]);

            if($t1 == $t2){
                return ($score1[3] <= $score2[3]);
            }else{
                return ($t1 < $t2);
            }

        }else{
            return ($score1 > $score2);
        }
        return false;
    }

}



if ( ! function_exists('compare_score'))
{
    function compare_score($score1, $score2){
        return ($score1 > $score2);
    }

}


if(!function_exists('encrypt_decrypt')){
    
    function encrypt_decrypt($action, $string) {
        $output = false;
        $encrypt_method = "AES-256-CBC";
        $secret_key = 'This is my secret key';
        $secret_iv = 'This is my secret iv';
        // hash
        $key = hash('sha256', $secret_key);
        
        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv = substr(hash('sha256', $secret_iv), 0, 16);
        if ( $action == 'encrypt' ) {
            $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
            $output = base64_encode($output);
        } else if( $action == 'decrypt' ) {
            $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
        }
        return $output;
    }
    
    
}

if(!function_exists('get_client_ip')){
    
    function get_client_ip() {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if(isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
    
}


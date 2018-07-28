<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * fonction permettant de calculer la diffèrence d'heure entre deux heures données
 */
 if ( ! function_exists('timesBetween'))
 {
 	 function timesBetween($time1, $time2)
 	 {
 		  if($time1 != NULL & $time2 != NULL){
				$time1 = strtotime($time1);
				$time2 = strtotime($time2);
				$difference = round(abs($time2 - $time1) / 3600,2);
 		   	return $difference;
 		  } else {
 		  	return "0";
 		  }
 	 }

 }
/**
 * fonction qui permet de transformer la date en date sql
 */
if ( ! function_exists('conversionDateSql'))
{
	 function conversionDateSql($dateheure = null)
	 {
		  if($dateheure != null){
              $tmp=  explode(" ",$dateheure);
              $date=$tmp[0];
              list($jours,$mois,$annee) = explode("/", $date);
              if(isset($tmp[1])){
                $heure=$tmp[1];
                $datesql = $annee."-".$mois."-".$jours ." ".$heure;
              }
              else{
                  $datesql = $annee."-".$mois."-".$jours;
              }
		   	return $datesql;
		  } else {
		  	return "0000-00-00";
		  }
	 }

}

/**
 * fonction qui permet de transformer la date en date francais
 */
if ( ! function_exists('conversionDate'))
{
	 function conversionDate($dateheure = null,$afficherHeure=TRUE)
	 {
		  if($dateheure != null && $dateheure!="0000-00-00"){
              $tmp = explode(" ",$dateheure);
              $date=$tmp[0];
              list($annee,$mois,$jours,) = explode("-", $date);
              if(isset($tmp[1])){
                  $heure=$tmp[1];
                  if($afficherHeure) return $jours."/".$mois."/".$annee ." ".$heure ;
                  else return $jours."/".$mois."/".$annee;
              }
              else{
                  return $jours."/".$mois."/".$annee ;
              }
		  } else {
		  		return "-";
		  }
	 }
}

if ( ! function_exists('mois_date'))
{
 	function mois_date($mois="") {
        if($mois==""){
        $date = date("d-m-Y");
		$mois= explode('-',$date);
            $m=$mois[1]*1;
        }
        else
            $m=$mois;
		$listeMois = array("","Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");
		//var_dump($mois[1]);die();

		return $listeMois[$m];
	}
}
if ( ! function_exists('age'))
{
	  function age($ddn){
	    $thedate=explode('-',$ddn);
	    $jour    = date('d');
	    $mois    = date('m');
	    $annee   = date('Y');
	    if($thedate[0]==$annee) return 1;

	    $res = $annee - $thedate[0];
	    if ($thedate[1] > $mois)
	    {
	        $res= $res - 1;
	    }
	    elseif($thedate[1] == $mois && $thedate[2] <= $jour)
	    {
	        $res = $res - 1;
	    }
	    return $res ;
	}
}

if ( ! function_exists('nombreDeJour'))
{
   function nombreDeJour($debut, $fin) {
        //60 secondes X 60 minutes X 24 heures dans une journée
        $nbSecondes= 60*60*24;

        $nbdeb = strtotime($debut);
        $nbfin = strtotime($fin);
        $diff = $nbfin - $nbdeb;
        $res=1+round($diff / $nbSecondes);
        return $res;
    }
}

if ( ! function_exists('jourOuvree'))
{
    function jourOuvree($debut, $fin) {
        $s = strtotime($fin)-strtotime($debut);
        $nb_jours = intval($s/86400)+1;

        $d = explode('-', $debut);
        $jour_apres = mktime(0,0,0, $d[1], $d[2], $d[0]);
        $nbjoursouvree=0;
        $nbweekend=0;
        for($i = 0; $i < $nb_jours; $i++) {

            if(date('w', $jour_apres) == 6 || date('w', $jour_apres) == 0)  $nbweekend++;
            else {
                //echo $jour_apres."<br/>";
                $nbjoursouvree++;
            }
            $jour_apres += (60*60*24);
        }
        //return $nb_jours."=".$nbjoursouvree."/".$nbweekend;
        return $nbjoursouvree;
    }
}

/**
 * function qui permet de transformer la date en date francais
 */
// if ( ! function_exists('conversionDate'))
// {
//   function conversionDate($date = null)
//   {
//     if($date != null){
//       $dateSplite = explode("-", $date);
//       $jours = $dateSplite[2];
//       $mois = $dateSplite[1];
//       $annee = $dateSplite[0];
//       return $jours."/".$mois."/".$annee;
//     }
//     else {
//       return "00/00/0000";
//     }

//   }
// }
/**
 * function qui permet de transformer la date en date sql
 */
if ( ! function_exists('conversionDateSql'))
{
  function conversionDateSql($date = null)
  {
    if($date != null){
      $dateSplite = explode("/", $date);
      $jours = $dateSplite[0];
      $mois = $dateSplite[1];
      $annee = $dateSplite[2];
      return $annee."-".$mois."-".$jours;
    }
    else {
      return null;
    }

  }
}

/**
 * function qui permet de transformer la date en date sql avec specification separateur et format
 * $format :
 * 1 = jj/MM/aaaa
 * 2 = jj-MM-aaaa
 * 3 = aaaa/MM/jj
 * 4 = aaaa-MM-jj
 */
if ( ! function_exists('conversionDateSqlSeparateur'))
{
  function conversionDateSqlSeparateur($date = null, $separateur, $format)
  {

    if($date != null){
      if($format == "jj/MM/aaaa" || $format == "jj-MM-aaaa"){
          $dateSplite = explode($separateur, $date);
          $jours = $dateSplite[0];
          $mois = $dateSplite[1];
          $annee = $dateSplite[2];
          return $annee."-".$mois."-".$jours;
      }
      else if($format == "aaaa/MM/jj" || $format == "aaaa-MM-jj"){
          $dateSplite = explode($separateur, $date);
          $jours = $dateSplite[2];
          $mois = $dateSplite[1];
          $annee = $dateSplite[0];
          return $annee."-".$mois."-".$jours;
      }
    }
    else {
      return null;
    }
  }
}

  /**
   * Etablie une liste des jours entre 2 dates
   * @param  date $strDateFrom : Date de début
   * @param  date $strDateTo   : Date de fin
   * @return array              Tableau de liste de dates
   */
if ( ! function_exists('createDateRangeArray'))
{
  function createDateRangeArray($strDateFrom,$strDateTo)
  {
      $aryRange=array();

      $iDateFrom=mktime(1,0,0,substr($strDateFrom,5,2),     substr($strDateFrom,8,2),substr($strDateFrom,0,4));
      $iDateTo=mktime(1,0,0,substr($strDateTo,5,2),     substr($strDateTo,8,2),substr($strDateTo,0,4));

      if ($iDateTo>=$iDateFrom)
      {
          array_push($aryRange,date('Y-m-d',$iDateFrom)); // la première entrée
          while ($iDateFrom<$iDateTo)
          {
              $iDateFrom+=86400; // ajoute 24 heures
              array_push($aryRange,date('Y-m-d',$iDateFrom));
          }
      }
      return $aryRange;
  }
}

/**
 * Calcule le nombre de semaine entre 2 dates
 * @param  date $datefrom : Date de début
 * @param  date $dateto   : Date de fin
 * @return float          Chiffre entier
 */
if ( ! function_exists('weeks_between')) {
  function weeks_between($datefrom, $dateto)
    {
        $datefrom = DateTime::createFromFormat('Y-m-d',$datefrom);
        $dateto = DateTime::createFromFormat('Y-m-d',$dateto);
        $interval = $datefrom->diff($dateto);
        $week_total = $interval->format('%a')/7;
        return floor($week_total);

    }
}

  /**
   * Convertie les formats 'd/m' en 'Y-m-d'
   * @param  date $date : la date en question
   * @return date       La date convertie
   */
if ( ! function_exists('convertUglyDates')) {
  function convertUglyDates($date)
  {
    $converted_date = DateTime::createFromFormat('d/m', $date)->format('Y-m-d');
    return $converted_date;
  }
}


  /**
   * Renvoie la date de lundi dans la semaine du jour spécifié
   * @param  DateTime $date : jour quelconque
   * @return DateTime         lundi de la semaine du jour spécifié
   */
if ( ! function_exists('getMonday')){
  function getMonday(DateTime $date){
      $outdate = clone($date);
      $day = $date->format("w");  // prendre le jour de la semaine (dimanche = 0)
      $outdate->sub(new DateInterval("P".$day."D")); // soustraire le jour de la semaine avec la date renvoie toujours à dimanche
      $temp = $outdate->format('Y-m-d H:i:s');
      $monday = date('Y-m-d',strtotime($temp . "+1 days"));
      return $monday;
  }
}


/*
 * renvoie à quelle jour (en français) est ce date
 * @param  string $date format(Y-m-d)
 * @return string nom du jour
 */
if( ! function_exists('getNameDay')){
    function getNameDay($str_date){
        $jourName = array('Mon'=>'Lundi','Tue'=>'Mardi','Wed'=>'Mercredi','Thu'=>'Jeudi','Fri'=>'Vendredi','Sat'=>'Samedi','Sun'=>'Dimanche');
        $tabDate = explode('-', $str_date);
        $timestamp = mktime(0, 0, 0, $tabDate[1], $tabDate[2], $tabDate[0]);
        $jour = date("D", $timestamp);
        return $jourName[$jour];
    }
}

/*
 * renvoie le nom du jour
 * @param int $numero dim -> 0 ... samedi -> 6
 * @param string $lang : langue (fr , en, ...)
 */
if( ! function_exists('getNameDayByNum')){
    function getNameDayByNum($numero, $lang = 'fr'){

        if(!in_array($numero, range(0,6))) return null;

        $days = array(
            'fr' => array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi')
        );
        return $days[$lang][$numero];
    }
}

/*
 * convertir date anglais en français Y-m-d en d/m/Y
 * @param  string $str_date format(Y-m-d)
 * @return string $new_str_date
 */
if( ! function_exists('convertDateFormatToFr')){
    function convertDateFormatToFr($str_date){
        $tabDate = explode('-', $str_date);
        $new_str_date = $tabDate[2].'/'.$tabDate[1].'/'.$tabDate[0] ;
        return $new_str_date;
    }
}


/*
 * convertir date anglais en français mm/dd/yyyy en Y-m-d
 * @param  string $str_date format(Y-m-d)
 * @return string $new_str_date
 */
if( ! function_exists('changeDateFormat')){
    function changeDateFormat($str_date){
        $tabDate = explode('/', $str_date);
        $new_str_date = $tabDate[2].'-'.$tabDate[1].'-'.$tabDate[0] ;
        return $new_str_date;
    }
}

/*
 * convertir affichage heure
 * @param  string $str_heure(h:m:s)
 * @return string $new_str_date
 */
if( ! function_exists('convertHeureFormat')){
    function convertHeureFormat($str_heure){
        $tabHeure = explode(':', $str_heure);
        $new_str_heure = $tabHeure[0].'H'.$tabHeure[1] ;
        return $new_str_heure;
    }
}

/**
 * fonction permettant de calculer la durée d'un cours
 */
 if ( ! function_exists('timesBetween'))
 {
 	 function calcDuration($time1, $time2)
 	 {
 		  die('ok');
 	 }

 }

/* End of file date_helper.php */
/* Location: ./system/helpers/date_helper.php */

/**
 * fonction permettant de calculer la durée d'un cours
 */
 if ( ! function_exists('getDateDuJour'))
 {
 	 function getDateDuJour()
 	 {
 		  $now = date('Y-m-d');
 		  $date = getdate (strtotime($now));
 		  $day = array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');
 		  $month = array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");
 		  return $day[$date['wday']].' '.$date['mday'].' '.$month[$date['mon'] - 1].' '.$date['year'];
 		  
 	 }

 }


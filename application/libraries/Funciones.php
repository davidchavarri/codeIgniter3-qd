<?php if (!defined('BASEPATH')) exit('No permitir el acceso directo al script');

class Funciones{

	function meses_espanol($month){

		if($month=='01'){
			$mes='Enero';
		}else if ($month=='02'){
			$mes='Febrero';
		}else if ($month=='03'){
			$mes='Marzo';
		}else if ($month=='04'){
			$mes='Abril';
		}else if ($month=='05'){
			$mes='Mayo';
		}else if ($month=='06'){
			$mes='Junio';
		}else if ($month=='07'){
			$mes='Julio';
		}else if ($month=='08'){
			$mes='Agosto';
		}else if ($month=='09'){
			$mes='Septiembre';
		}else if ($month=='10'){
			$mes='Octubre';
		}else if ($month=='11'){
			$mes='Noviembre';
		}else {
			$mes='Diciembre';
		}
		return $mes;
	}

	function meses_espanol_texto($month){

		if($month=='January'){
			$mes='Enero';
		}else if ($month=='February'){
			$mes='Febrero';
		}else if ($month=='March'){
			$mes='Marzo';
		}else if ($month=='April'){
			$mes='Abril';
		}else if ($month=='May'){
			$mes='Mayo';
		}else if ($month=='June'){
			$mes='Junio';
		}else if ($month=='July'){
			$mes='Julio';
		}else if ($month=='August'){
			$mes='Agosto';
		}else if ($month=='September'){
			$mes='Septiembre';
		}else if ($month=='October'){
			$mes='Octubre';
		}else if ($month=='November'){
			$mes='Noviembre';
		}else {
			$mes='Diciembre';
		}
		return $mes;
	}

	function meses_espanol_texto_corto($month){

		if($month=='Jan'){
			$mes='Ene';
		}else if ($month=='Feb'){
			$mes='Feb';
		}else if ($month=='Mar'){
			$mes='Mar';
		}else if ($month=='Apr'){
			$mes='Abr';
		}else if ($month=='May'){
			$mes='Mayo';
		}else if ($month=='Jun'){
			$mes='Jun';
		}else if ($month=='Jul'){
			$mes='Jul';
		}else if ($month=='Aug'){
			$mes='Ago';
		}else if ($month=='Sep'){
			$mes='Sep';
		}else if ($month=='Oct'){
			$mes='Oct';
		}else if ($month=='Nov'){
			$mes='Nov';
		}else {
			$mes='Dic';
		}
		return $mes;
	}

	function dias_espanol($month){
		if($month=='Monday'){
			$mes='Lunes';
		}else if ($month=='Tuesday'){
			$mes='Martes';
		}else if ($month=='Wednesday'){
			$mes='Miercoles';
		}else if ($month=='Thursday'){
			$mes='Jueves';
		}else if ($month=='Friday'){
			$mes='Viernes';
		}else if ($month=='Saturday'){
			$mes='Sábado';
		}else if ($month=='Sunday'){
			$mes='Domingo';
		}
		return $mes;
	}

	function separa_cero($dinero){
        $ceros=substr($dinero,-3);
		return $ceros;
	}

	function separa_numeros($dinero){
        $num=substr($dinero,0,-3); 
		return $num;
	}

	/* Recibe una fecha en formato yyyy-mm-dd y devuelve el año en formato yyyy */
	function obtener_ano_fecha($crono){
		return date('Y',strtotime($crono));
	}	

	/* Recibe una fecha en formato yyyy-mm-dd y devuelve el día en formato dd */
	function obtener_dia_fecha($crono){
		return date('d',strtotime($crono));
	}

	/* Recibe una fecha en formato yyyy-mm-dd y devuelve el día en formato Escrito en Español */
	function obtener_mes_fecha($crono){
		$fecha=date('m',strtotime($crono));
		$mes_sp=self::meses_espanol($fecha);
		return $mes_sp;
	}

	function url($str, $separator = 'dash', $lowercase = TRUE){

	 	$str=strtr($str,$array=array("À"=> "A","Á"=>"A","Â"=>"A","Ã"=>"A","Ä"=>"A","Å"=>"A","à"=>"a","á"=>"a","â"=>"a","ã"=>"a","ä"=>"a","å"=>"a","Ò"=>"O","Ó"=>"O","Ô"=>"O","Õ"=>"O","Ö"=>"O","Ø"=>"O","ò"=>"o","ó"=>"o","ô"=>"o","õ"=>"o","ö"=>"o","ø"=>"o","È"=>"E","É"=>"E","Ê"=>"E","Ë"=>"E","è"=>"e","é"=>"e","ê"=>"e","ë"=>"e","Ç"=>"C","ç"=>"c","Ì"=>"I","Í"=>"I","Î"=>"I","Ï"=>"I","ì"=>"i","í"=>"i","î"=>"i","ï"=>"i","Ù"=>"U","Ú"=>"U","Û"=>"U","Ü"=>"U","ù"=>"u","ú"=>"u","û"=>"u","ü"=>"u","ÿ"=>"y","Ñ"=>"N","ñ"=>"n"));

		if ($separator == 'dash'){
		   $search  = '_';
		   $replace = '-';
		}else{
		   $search  = '-';
		   $replace = '_';
		}
	 
		$trans = array(
	      '&\#\d+?;'    => '',
	      '&\S+?;'    => '',
	      '\s+'     => $replace,
	      '[^a-z0-9\-\._]'  => '',
	      $replace.'+'   => $replace,
	      $replace.'$'   => $replace,
	      '^'.$replace   => $replace,
	      '\.+$'     => ''
	     );
	 
		$str = strip_tags($str);
	 
		foreach ($trans as $key => $val){
			$str = preg_replace("#".$key."#i", $val, $str);
		}
	 
		if ($lowercase === TRUE){ $str = strtolower($str); }

	  	return trim(stripslashes($str));
	}

} 

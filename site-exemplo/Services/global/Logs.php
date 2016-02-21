<?php

class Logs
{

	/**
	*/

	public static function DirLogs()
	{
        $path = "/Users/mac/Sites/inkor-bi/Services/global/logs/";
		return $path;
	}

	public static function escreverNoLog($texto)
	{
		$handle = fopen ( Logs::DirLogs () . "Log_" . date ( "Ymd" ) . ".log", "a" );
		fputs ( $handle, "" . date ( "Ymd His" ) . " - " );
		fputs ( $handle, print_r ( $texto, true ) . "\n", 999999 );
		fclose ( $handle );
	}

	public static function escreverNoLogObjeto($texto, $titulo)
	{
		$handle = fopen ( Logs::DirLogs () . "Log_" . date ( "Ymd" ) . ".log", "a" );
		fputs ( $handle, "" . date ( "Ymd His" ) . " - " );
		fputs ( $handle, $titulo . print_r ( $texto, true ) . "\n", 9999999 );
		fclose ( $handle );
	}

	public static function transforArrayEmTexto($dados)
	{
		$texto = "";
		for($i = 0; $i < count ( $dados ); $i ++) {
			$texto .= $dados [$i] . ", ";
		}
		return $texto;
	}

}

?>

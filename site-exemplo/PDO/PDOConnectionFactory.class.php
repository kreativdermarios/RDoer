<?php

/**
 *
 * @author Max Fertig
 */

class PDOConnectionFactory{

	public $con 		= null;
	public $persistent 	= true;
	public $dbType 		= "mysql";
	public $host 		= "127.0.0.1";
	public $user 		= "root";
	public $senha 		= "";
	public $db      	= "sospic";

	public function PDOConnectionFactory( $persistent=true ){
		if( $persistent != false){
			$this->persistent = true;
		}
	}

	public function getConnection(){
		try{

			$this->con = new PDO($this->dbType.":host=".$this->host.";dbname=".$this->db, $this->user, $this->senha,
					array( PDO::ATTR_PERSISTENT => $this->persistent ) );

			return $this->con;

		}catch ( PDOException $ex ){
			echo "Erro: ".$ex->getMessage();
		}
	}

	public function Close(){
		if( $this->con != null )
			$this->con = null;
	}

}
?>
<?php
    include "conexion.php"; 
    session_start();
    
     class Cliente{
      private static $instancia;
	  private $base;	
     	
     	function __construct()
     	{
     		$this->base = conexion::conectando();
     		
     	}
        public static function conectando()
        { 
            if (!isset(self::$instancia)) 
            {
                $miclase = __CLASS__;
                self::$instancia = new $miclase; 
            }
            return self::$instancia; 
        }
        function Listar()
        {
                $sql = "select *from cliente";
                $query = $this->base->prepare($sql);
                $query->execute(); $this->base = null;

                $Datos=array();
                while( $datos = $query->fetch()){
                    $Datos[]=$datos;
                }
                return $Datos;

        }

    }
?>
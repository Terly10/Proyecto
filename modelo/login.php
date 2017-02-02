
<?php
    include "conexion.php"; 
    session_start();
    
     class Login{
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
        function Logeo($usuario,$clave)
        {
                $sql = "select *from usuarios where usuario = '".$usuario."' and clave = '".$clave."'";
                $query = $this->base->prepare($sql);
                $query->execute(); $this->base = null;

                if($query->rowCount() == 1)
                {
                    $fila  = $query->fetch();
                    $_SESSION['usuario'] = $fila['usuario'];                 
                    return true;
                }
        }

    }
?>
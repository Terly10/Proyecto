<?php
class conexion
{
	private static $instancia;
	private $base;	
	private function __construct()
	{
		try
		{
			$this->base = new PDO('mysql:host=localhost;dbname=practica', 'root', '');
            $this->base->exec("SET CHARACTER SET utf8");
			
		} 
		catch (Exception $e)
		{
			print "error";			
		}
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
        public function prepare($sql){
        return $this->base->prepare($sql);
    }
}

?>
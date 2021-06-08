<?php 
	require_once('db_abstract_model.php');
	class Usuario extends DBAbstractModel 
	{	
 		public $nombre;
 		public $apellido;
 		public $email;
 		private $clave;
 		protected $id;

 		function __construct() 
 		{
 			$this->db_name = 'prueba2';
 		}

 		public function get($user_email='') 
 		{
 			if($user_email != ''):
 				$this->query = " 
 					SELECT id, nombre, apellido, email, clave 
 					FROM usuarios 
 					WHERE email = '$user_email' 
 					";
 				$this->get_results_from_query();
 			endif;
 			if(count($this->rows) == 1):
 				foreach ($this->rows[0] as $propiedad=>$valor):
 					$this->$propiedad = $valor;
 				endforeach;
 			endif;
 		}
 		
 		public function set($correo='') 
 		{
 			$this->query="INSERT INTO USUARIOS (nombre, apellido, email, clave)  VALUES ('Richard','CasVal','".$correo."','785421')";
			$this->execute_single_query();
 		}

 		public function edit($user_data=array()) 
 		{
 			foreach ($user_data as $campo=>$valor):
 				$$campo = $valor;
 			endforeach;
 			$this->query = " 
 				UPDATE usuarios 
 				SET nombre='$nombre', 
 				apellido='$apellido', 
 				clave='$clave' 
 				WHERE email = '$email' 
 				";
 			$this->execute_single_query();
 		}
 		public function delete($user_email='') 
	 	{
	 		$this->query = " 
	 			DELETE FROM usuarios 
	 			WHERE email = '$user_email' 
 				";
 			$this->execute_single_query();
 		}
 		function __destruct()
 		{
 			//unset($this);
 		}
	}
?>

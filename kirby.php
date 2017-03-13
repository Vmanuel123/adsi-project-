<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
class proveedor 
{
    public $nombre;
    public $apellido; 
    private $nit ;
    private $cedula; 
    private $contraseña; 
    private $correo 	;
       public function guardar($nombre,$apellido,$nit,$contraseña,$correo){
		   $this->nombre = $nombre;
		   $this->apellido = $apellido;
		   $this->nit = $nit;
		   $this->cedula = $cedula;
		   $this->contraseña = $contraseña;
		   $this->correo = $correo;
	   }
	   public function buscar(){
		   
	   }
}
class producto {
	public $nombrep;
	public $descripcion;
				   
	  public function agregar(){
		  $this->nombrep=$nombrep;
		  $this->descripcion=$descripcion;
	  }

	public function eliminar (){
		
	}
	public function buscarp (){
	}
    public function moodificar (){
	}
}
class catalogo  {
	public $nombrep; 
	public $precio;
	public $nombre; 
	
	public function ver (){
		echo "$nombrep,$precio,$nombre";
		
	}
}
class cliente {
	public $nombre;
	public $apellidos;
	private $correo;
	private $contraseña;
	private $cedula;
	
	public function guardar() {
	$this->$nombre;
	$this->$apellidos;
	$this->$correo;
	$this->$contraseña;
	$this->$cedula;
	}
	public function ver () {
		echo "$nombrep,$precio,$nombre";
	}
}
	
	class CarritodeCompras  {
	public $descripcionp;
	public $precio;
	private $nombrep;

	
	public function añadir() {
	$this->$descripcionp;
	$this->$precio;
	$this->$nombrep;

	}
}

	public function 
	
	
?>

</body>
</html>
<?php namespace App\Controllers;

	use App\Models\CrudModel;

class Crud extends BaseController
{
	public function index()
	{
		$Crud=new CrudModel();
		$datos=$Crud->listam();

		$mensaje = session('mensaje');

		$data = [
			"datos"=>$datos,
			"mensaje"=>$mensaje
		];
		return view('listamascota', $data);
	}

	public function crear(){
		$datos = [
			"nombre" => $_POST['nombre'],
			"tipo" => $_POST['tipo'],
			"nombrep" => $_POST['nombrep']
		];
		$Crud = new CrudModel();
		$respuesta = $Crud->insertar($datos);

		if ($respuesta > 0) {
			return redirect()->to(base_url().'/')->with('mensaje','1');
		}else{
			return redirect()->to(base_url().'/')->with('mensaje','0');
		}

	}

	public function actualizar(){
		$datos = [

			"nombre" => $_POST['nombre'],
			"tipo" => $_POST['tipo'],
			"nombrep" => $_POST['nombrep']
		];
		$idNombre = $_POST['idNombre'];
		$Crud = new CrudModel();
		$respuesta = $Crud->actualizar($datos, $idNombre);

		if ($respuesta) {
			return redirect()->to(base_url().'/')->with('mensaje','2');
		}else{
			return redirect()->to(base_url().'/')->with('mensaje','3');
		}

	}

	public function obtenerNombreMascota($idNombre){
		$data = ["id_mascota" => $idNombre];
		$Crud = new CrudModel();
		$respuesta = $Crud->obtenerNombreMascota($data);

		$datos = ["datos" => $respuesta];
		return view('actualizar', $datos);
	}

	public function eliminar($idNombre){
		$Crud = new CrudModel();
		$data = ["id_mascota" => $idNombre];

		$respuesta = $Crud->eliminar($data);

		if ($respuesta) {
			return redirect()->to(base_url().'/')->with('mensaje','4');
		}else{
			return redirect()->to(base_url().'/')->with('mensaje','5');
		}
	}
}

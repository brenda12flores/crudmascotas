<?php namespace App\Models;

	/**
	 * 
	 */
	use CodeIgniter\Model;

	class CrudModel extends Model
	{
		public function listam()	{
			$Nombres =$this->db->query("SELECT * FROM t_mascotas");
			return $Nombres->getResult();
		}

		public function insertar($datos){
			$Nombres = $this->db->table('t_mascotas');
			$Nombres->insert($datos);

			return $this->db->insertID();
		}

		public function obtenerNombreMascota($data){
			$Nombres = $this->db->table('t_mascotas');
			$Nombres->where($data);
			return $Nombres->get()->getResultArray();
		}

		public function actualizar($data, $idNombre){
			$Nombres = $this->db->table('t_mascotas');
			$Nombres->set($data);
			$Nombres->where('id_mascota', $idNombre);
			return $Nombres->update();
		}

		public function eliminar($data){
			$Nombres = $this->db->table('t_mascotas');
			$Nombres->where($data);
			return $Nombres->delete();
		}
	}
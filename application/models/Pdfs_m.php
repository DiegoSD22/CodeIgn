<?php 
class Pdfs_m extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
        
//Función para obtener las provincias
	function getProvincias()
	{
		$query = $this->db->get('provincias_es');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $fila)
			{
				$data[] = $fila;
			}
				return $data;
		}
	}
        
//Función para obtener las localidades, dependiendo de la provincia seleccionada
    function getProvinciasSeleccionadas($provincia)
	{
        $query = $this->db->query('SELECT l.provincia,l.localidad,l.id,p.provincia 
                                  from localidades_es l inner join provincias_es p
                                  on l.provincia = p.id and p.id = '.$provincia);
        $data["localidades"]=array();
	    if($query->num_rows()>0)
	    {
		foreach ($query->result() as $fila)
		{
			$data["localidades"][$fila->id]["l.provincia"] = $fila->provincia;
			$data["localidades"][$fila->id]["l.localidad"] = $fila->localidad;
			$data["localidades"][$fila->id]["l.id"] = $fila->id;
            $data["localidades"][$fila->id]["p.provincia"] = $fila->provincia;
		}
			return $data["localidades"];
	     }
	}    
}

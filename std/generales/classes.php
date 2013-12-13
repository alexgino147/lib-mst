<?php 

class DBManager{
	function DBManager(){
	 }
	function conectar(){
	$conn = mysql_connect("127.0.0.1", "root", "jorge");
	mysql_select_db("std");
	return $conn;
	}
}

class ctramites{
    function ctramites(){
    }
    
    function listatramite(){
        $conn = new DBmanager;
        if($conn-> conectar()==true){
            $query="select idtramite, nombretramite from tm_tramites";
            #echo $query;
            $result = mysql_query($query);
            if(!result)
	return false;
	else
	mysql_close();
	return $result;
        }
    }
    
    function insertatramite(){
        
    }
    
    function actualizatramite(){
        
    }
    
    function eliminatramite(){
        
    }

    
}



class clogeo{

	function clogeo(){
	}

	function acceso($cu, $ps){

	$con = new DBManager;
	if ($con->conectar()==true){
	
	$query= "INSERT INTO `tm_accesos` (`ip` ,`id`, `password`) VALUES ('".$_SERVER['REMOTE_ADDR']."', '$cu', '$ps');";
	//echo $query;
	$result = mysql_query($query);
		if (!$result)
		   return false;
		 else
			   mysql_close();
		   return $result;
		}
	}
}


class cusuarios{
	function cusuarios(){
	}
	
	function clistarusuarios($id){
	if ($id){
	$cond1=" where username like '%$id%'";
	}
	$con = new DBmanager;
	if ($con-> conectar()==true){
	$query="SELECT * FROM `tm_usuarios` $cond1;";
	//echo $query;
	$result = mysql_query($query);
		if(!result)
			return false;
		else
			mysql_close();
		return $result;
		}
	}
}

	
class caccesosistema{
	function caccesosistema(){
	}
	
	function clistaaccesosistema($iad){
	if ($iad){
	$cond1=" where id like '%$iad%'";
	}
	$con = new DBmanager;
	if($con-> conectar()==true){
		$query="SELECT * FROM `tm_accesos` $cond1 order by fechaacceso desc";
		//echo $query;
		$result = mysql_query($query);
			if(!result)
				return false;
				else
				mysql_close();
				return $result;
	}
	}

}

class cproyeccion{
	function cproyeccion(){
	}
	
	function listadatos($idr){
		$con = new DBmanager;
	if($con-> conectar()==true){
		$query="SELECT a.tm_manual_codigomanual, c.codigoasignatura as codigoasignatura, w.codigociclo as ciclo, a.estado as estado,x.username as username, a.`idtm_ope_has_tm_manual`,a.`tm_ope_codigoope`, SUM(a.`cantidad`) as mayor, a.`fecharegistro`, b.`idmanual`, b.`nombremanual`, c.`nombreasignatura`, f.`nombrefacultad`, f.`idfacultad`, z.`cantidad` as menor  FROM `tm_ciclos` w, `tm_manual_ope` z, `tm_ope_has_tm_manual` a, tm_manual b, tm_asignatura c, tm_asignatura_manual d, tm_carrera e, tm_facultad f, tm_usuario_facultad g, tm_usuarios x WHERE w.idciclo=c.idciclo and a.tm_ope_codigoope=z.idope and a.tm_manual_codigomanual=z.idmanual and x.id=a.tm_ope_codigoope and b.`idmanual`=a.`tm_manual_codigomanual` and d.`idasignatura`=c.`idasignatura` and d.`idmanual`=b.`idmanual` and c.`idcarrera`=e.`idcarrera` and e.`idfacultad`=f.`idfacultad`  and g.`idfacultad`=f.`idfacultad` and a.`tm_manual_codigomanual`=$idr GROUP BY c.codigoasignatura order by a.`fecharegistro` desc ";
		
		//echo $query;
		
		$result = mysql_query($query);
			if(!result)
				return false;
				else
				mysql_close();
				return $result;
		}
	}
}


class calmacen{

	function calmacen(){
	}
	
	function listaguia($id){
	if ($id){
	$cond1=" and numeroguia='$id'";
	}
	$con=new DBmanager;
	if($con->conectar()==true){
	$sql="SELECT * FROM `tm_guia` where estado=1 $cond1 order by fechaguia desc ";
	//echo $sql;
	$result = mysql_query($sql);
	if(!result)
		return false();
		else
		mysql_close();
		return $result;
		}
	}
	
		function listausuarioalmacen($id){
	/*if ($id){
	$cond1=" and numeroguia='$id'";
	}*/
	$con=new DBmanager;
	if($con->conectar()==true){
	$sql="SELECT a.idalmacen, a.idusuario as idusuarioalmacen FROM `tm_usuario_almacen` a WHERE a.idalmacen=$id ";
	//echo $sql;
	$result = mysql_query($sql);
	if(!result)
		return false();
		else
		mysql_close();
		return $result;
		}
	}
}

class ctransporte{

	function ctransporte(){
	}
	
	function ingresadatostransporte($ng, $co, $li, $pla, $mar){
	$con=new DBmanager;
	if($con->conectar()==true){
	$query="INSERT INTO `tm_transporte` (`numeroguia`, `conductor`, `licencia`, `placa`, `marca`) VALUES ('$ng', '$co', '$li', '$pla', '$mar');";
	//echo $query;
	$result = mysql_query($query);
		if (!$result)
		   return false;
		 else
			   mysql_close();
		   return $result;
		   }
	}
	
	function clistatransporte($id){
	if ($id){
	$cond1=" WHERE numeroguia='$id'";
	}
	$con=new DBmanager;
	if($con->conectar()==true){
	$query="SELECT * FROM `tm_transporte` $cond1;";
	//echo $query;

	$result = mysql_query($query);
		if (!$result)
		   return false;
		 else
			   mysql_close();
		   return $result;
	
	}
	}
}

class cdocumentos{
	function cdocumentos(){
	}
	
	function clistadocumentos(){
	$con=new DBmanager;
	if($con->conectar()==true){
	$query="SELECT a.id_documento, a.titulo, a.descripcion, a.fechaupload, a.tamanio, a.tipo, a.nombre_archivo, a.tamanio_unidad, a.idusuario, b.username FROM `tm_documentos` a, `tm_usuarios` b WHERE b.id=a.idusuario order by fechaupload desc";
	//echo $query;
	$result = mysql_query($query);
		if(!$result)
			return false;
			else
			mysql_close();
			return $result;
		}
	}
	
	function clistadocumentosuser($id){
	$con=new DBmanager;
	if($con->conectar()==true){
	$query="SELECT a.id_documento, a.titulo, a.descripcion, a.fechaupload, a.tamanio, a.tipo, a.nombre_archivo, a.tamanio_unidad, a.idusuario, b.username FROM `tm_documentos` a, `tm_usuarios` b WHERE b.id=a.idusuario and b.id=$id order by fechaupload desc";
	//echo $query;
	$result = mysql_query($query);
		if(!$result)
			return false;
			else
			mysql_close();
			return $result;
		}
	}
}


class creportes{
	function creportes(){
	}
	
	function creportestockope(){
	$con=new DBmanager;
	if($con->conectar()==true){
	$query="SELECT b.nombreope, a.idope as io, COUNT( a.estadostock ) AS conti FROM  `tm_manual_ope` a,  `tm_ope` b WHERE a.estadostock =1 AND a.idope = b.codigoope GROUP BY a.`idope`";
	//echo $query;
	$result = mysql_query($query);
		if(!$result)
			return false;
			else
			mysql_close();
			return $result;
		}
	}
}

?>
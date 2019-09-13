<?php
    class EnlacesPaginas {

    	public function enlacesPaginasModel($enlacesModel)
    	{
    		if ($enlacesModel == "home" ||
            $enlacesModel == "usuarios") {
		        $module="../../views/modules/".$enlacesModel.".php";
    		}
        elseif ($enlacesModel=="okusu") {
    			$module="../../views/modules/usuarios.php";
    		}
    		else {
    			$module="../../views/modules/home.php";
    		}
    		return $module;
    	}
    }
?>

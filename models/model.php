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
        elseif ($enlacesModel=="errormail") {
    			$module="../../views/modules/usuarios.php";
    		}
        elseif ($enlacesModel=="erroru") {
    			$module="../../views/modules/usuarios.php";
    		}
        elseif ($enlacesModel=="loginSuccess") {
    			$module="../../views/modules/home.php";
    		}
    		else {
    			$module="../../views/modules/home.php";
    		}
    		return $module;
    	}
    }
?>

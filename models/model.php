<?php
    class EnlacesPaginas {

    	public function enlacesPaginasModel($enlacesModel)
    	{
    		if ($enlacesModel == "home") {
    			$module="../../views/modules/".$enlacesModel.".php";
    		}
    		else {
    			$module="../../views/modules/home.php";
    		}
    		return $module;
    	}
    }
?>

<?php
    class EnlacesPaginas {

    	public function enlacesPaginasModel($enlacesModel)
    	{
    		if ($enlacesModel == "") {
    			$module="../views/modules/".$enlacesModel.".php";
    		}
    		else {
    			$module="../views/modules/home.php";
    		}
    		return $module;
    	}
    }
?>

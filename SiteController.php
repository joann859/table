<?php

require_once ROOT.'/method.php';
 
class SiteController {
	public function actionIndex()
	{  
		if(isset($_POST['hide'])){
			$options = $_POST['val'];
			Method::editDATA($options);				  
	    }
	    if(isset($_POST['less'])){
		$options = $_POST['val'];
			Method::editLESS($options);				  
        }
        if(isset($_POST['more'])){
	    $options = $_POST['val'];
		    Method::editMORE($options);				  
        }
        $get_data = Method::getDATA(); 
		require_once ROOT. '/view/index.php';
		return true;

	}
		
	 
}
?>
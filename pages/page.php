<?php


switch (true) {

	// http://localhost?view=home

	case (@$_GET['view'] == '' || @$_GET['view'] == 'home'):
    	include 'views/welcome.php';
		break;

	// more page


		

	// -----	



	// 404
	
	default:
		echo "<h3>404</h3>";
		break;
}



<?php

require_once __DIR__ . '/../model/session.class.php';

class IndexController {
	public function index() {
		// Dohvati ili započni session
		$ss = Session::getInstance();

		if (!isset($_SESSION['id'])) // Login nije obavljen -- preusmjeri na podstranicu za login
			header('Location: index.php?rt=login');
		else
			header('Location: index.php?rt=???');  // Preusmjeri na ??? podstranicu
	}
}; 

?>

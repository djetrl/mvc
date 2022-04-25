<?php
	use \Core\Route;
	
	return [
		// new Route('/product/:n/', 'product', 'show'),
		new Route('/product/all/', 'product', 'all'),
		// new Route('/page', 'page', 'act'),
		// new Route('/user/:id/:key/', 'user', 'info'), 
		// new Route('/user/:id/', 'user', 'show'),
		// new Route('/user/all/', 'user', 'all'),
		// new Route('/user/first/:n/', 'user', 'first'),
	];
?>

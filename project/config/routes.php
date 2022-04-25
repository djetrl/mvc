<?php
	use \Core\Route;
	
	return [
		new Route('/page/:id', 'page', 'one'),
		new Route('/pages',   'page', 'all'),
	];
?>

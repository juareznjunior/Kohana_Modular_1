<?php
Route::set('cliente_area', '(<directory>(/<controller>(/<action>(/<id>))))')
	->defaults(array(
		'directory'  => 'area',
		'controller' => 'welcome',
		'action'     => 'index'
	));
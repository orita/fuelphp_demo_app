<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
		'connection'  => array(
			//'dsn'        => 'mysql:host=192.168.59.103;dbname=fuel_intro',
			'dsn'        => 'mysql:host=db;dbname=fuel_intro',
			'username'   => 'root',
			'password'   => 'mysecretpassword',
		),
	),
);

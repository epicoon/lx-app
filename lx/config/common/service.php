<?php

return [
	// Common plugin aliases
	'aliases' => [],
	// Flag for use common plugin aliases
	'useCommonAliases' => true,

	// Directory(ies) for plugins
	'plugins' => 'plugins',

	// Service components
	'components' => [
        'modelManager' => lx\ModelManagerInterface::class,

		// You can define db-connector component for your service
		// 'dbConnector' => [
		//	'class' => 'lx\DbConnector',
		//	'default' => [
		//      'driver' => 'pgsql',
		//		'hostname' => 'localhost',
		//		'username' => 'username',
		//		'password' => '*',
		//		'dbName' => 'dbName'
		//	],
		//],
	],
];

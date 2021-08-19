<?php

return [
	//BlogController

	'' => [
		'controller' => 'blog',
		'action' => 'index',
	],

	'blog/state/id/{id:\d+}' => [
		'controller' => 'blog',
		'action' => 'state',
	],

	'blog/upload' => [
		'controller' => 'blog',
		'action' => 'upload',
	],

	//CatalogController
	
	'catalog' => [
		'controller' => 'catalog',
		'action' => 'index',
	],

	'catalog/mineral/id/{id:\d+}' => [
		'controller' => 'catalog',
		'action' => 'mineral',
	],

	'catalog/upload' => [
		'controller' => 'catalog',
		'action' => 'upload',
	],

	// AccountController

	'login' => [
		'controller' => 'account',
		'action' => 'login',
	],

	'register' => [
		'controller' => 'account',
		'action' => 'register',
	],

	'recovery' => [
		'controller' => 'account',
		'action' => 'recovery',
	],

	'activate' => [
		'controller' => 'account',
		'action' => 'activate',
	],

	'profile' => [
		'controller' => 'account',
		'action' => 'profile',
	],

	'users' => [
		'controller' => 'account',
		'action' => 'users',
	],

	'edit' => [
		'controller' => 'account',
		'action' => 'edit',
	],

	'logout' => [
		'controller' => 'account',
		'action' => 'logout',
	],

	//AdminController
	
	'admin/login' => [
		'controller' => 'admin',
		'action' => 'login',
	],

	'admin/logout' => [
		'controller' => 'admin',
		'action' => 'logout',
	],

	'admin/blog' => [
		'controller' => 'admin',
		'action' => 'blog',
	],

	'admin/blog/add' => [
		'controller' => 'admin',
		'action' => 'blogadd',
	],

	'admin/state/id/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'state',
	],

	'admin/catalog' => [
		'controller' => 'admin',
		'action' => 'catalog',
	],

	'admin/catalog/add' => [
		'controller' => 'admin',
		'action' => 'catalogadd',
	],

	'admin/mineral/id/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'mineral',
	],

	
];
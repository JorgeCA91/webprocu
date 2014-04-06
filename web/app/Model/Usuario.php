<?php
App::uses('AppModel', 'Model');
/**
 * Usuario Model
 *
 * @property Admin $Admin
 * @property Denunciante $Denunciante
 */
class Usuario extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'usuario';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'role';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Admin' => array(
			'className' => 'Admin',
			'foreignKey' => 'usuario_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Denunciante' => array(
			'className' => 'Denunciante',
			'foreignKey' => 'usuario_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}

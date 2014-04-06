<?php
App::uses('AppModel', 'Model');
/**
 * Reporte Model
 *
 * @property Admin $Admin
 * @property Denunciante $Denunciante
 * @property Extraviado $Extraviado
 */
class Reporte extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'reporte';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Admin' => array(
			'className' => 'Admin',
			'foreignKey' => 'admin_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Denunciante' => array(
			'className' => 'Denunciante',
			'foreignKey' => 'denunciante_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Extraviado' => array(
			'className' => 'Extraviado',
			'foreignKey' => 'extraviado_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

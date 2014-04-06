<?php
App::uses('AppModel', 'Model');
/**
 * Identificacion Model
 *
 * @property Denunciante $Denunciante
 * @property Extraviado $Extraviado
 */
class Identificacion extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'identificacion';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'tipo';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
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

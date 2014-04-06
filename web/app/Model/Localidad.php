<?php
App::uses('AppModel', 'Model');
/**
 * Localidad Model
 *
 * @property Municipio $Municipio
 * @property Denunciante $Denunciante
 * @property Extraviado $Extraviado
 */
class Localidad extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'localidad';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Municipio' => array(
			'className' => 'Municipio',
			'foreignKey' => 'municipio_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Denunciante' => array(
			'className' => 'Denunciante',
			'foreignKey' => 'localidad_id',
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
		'Extraviado' => array(
			'className' => 'Extraviado',
			'foreignKey' => 'localidad_id',
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

<?php
App::uses('AppModel', 'Model');
/**
 * Region Model
 *
 * @property Mp $Mp
 * @property Municipio $Municipio
 */
class Region extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'region';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Mp' => array(
			'className' => 'Mp',
			'foreignKey' => 'region_id',
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
		'Municipio' => array(
			'className' => 'Municipio',
			'foreignKey' => 'region_id',
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

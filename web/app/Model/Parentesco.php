<?php
App::uses('AppModel', 'Model');
/**
 * Parentesco Model
 *
 * @property Denunciante $Denunciante
 */
class Parentesco extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'parentesco';

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
		'Denunciante' => array(
			'className' => 'Denunciante',
			'foreignKey' => 'denunciante_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

<?php
App::uses('AppModel', 'Model');
/**
 * Position Model
 *
 * @property User $User
 */
class Position extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
        public $displayField = 'position';
	public $validate = array(
		'position' => array(
			'notempty' => array(
				'rule' => array('notempty'),
		'message' => 'Please do not leave this field blank',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'class' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please do not leave this field blank',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'position_id',
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
